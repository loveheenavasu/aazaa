<?php

namespace App\Service;

use App\Entity\Collector;
use App\Entity\PageContent;
use App\Entity\User;
use App\Entity\UserFavorites;
use App\Entity\UserWatchLog;
use Doctrine\ORM\EntityManagerInterface;
use \Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class PageContentHelper {

    protected $container;
    protected $em;
    protected $urlGenerator;

    protected $maxVideosDay = null;
    protected $maxVideosSevenDays = null;

    protected $maxFavoritesFree = null;
    protected $maxFavoritesPaid = null;

    /**
     * PageContentHelper constructor.
     * @param ContainerInterface $container
     * @param EntityManagerInterface $em
     * @param UrlGeneratorInterface $urlGenerator
     */
    public function __construct(ContainerInterface $container, EntityManagerInterface $em, UrlGeneratorInterface $urlGenerator)
    {
        $this->container            = $container;
        $this->em                   = $em;
        $this->urlGenerator         = $urlGenerator;
    }


    /**
     * @param PageContent $pageContent
     * @param User $user
     * @return bool|string
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function checkRules(PageContent $pageContent, $user){

        if($pageContent->getAccountRequired()){
            if(!$user){
                return $this->urlGenerator->generate('account_index');
            }

            if(!$user->hasRole('ROLE_ADMIN') && !$user->hasRole('ROLE_SUPER_ADMIN')) {

                if ($pageContent->getPaid()) {
                    if ($user->getSubscriptionActiveTillDate() AND (int)$user->getSubscriptionActiveTillDate()->format('YmdHi') > (int)(new \DateTime())->format('YmdHi')) {
                        if (!$this->allowedToViewThisPageToday($pageContent, $user)) {
                            return $this->urlGenerator->generate('account_limit');
                        }
                    }
                    else {
                        return $this->urlGenerator->generate('account_subscription');
                    }
                }
                elseif (!$this->allowedToViewThisPageToday($pageContent, $user)) {
                    return $this->urlGenerator->generate('account_limit');
                }
            }
        }
        $this->logPageContentView($pageContent, $user);
        return false;
    }


    /**
     * @param PageContent $pageContent
     * @param $user
     * @return bool
     */
    private function logPageContentView(PageContent $pageContent, $user){
        if($user) {
            $userWatchLog = $this->em->getRepository(UserWatchLog::class)->findOneBy([
                'user' => $user,
                'pageContent' => $pageContent
            ]);

            if (!$userWatchLog) {
                $userWatchLog = new UserWatchLog();
                $userWatchLog->setPageContent($pageContent);
                $userWatchLog->setUser($user);

            }
            else {
                $userWatchLog->setViews(($userWatchLog->getViews() + 1));
            }
            $this->em->persist($userWatchLog);
            $this->em->flush();
        }
        return true;
    }


    /**
     * @param PageContent $pageContent
     * @param User $user
     * @return bool
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function allowedToViewThisPageToday(PageContent $pageContent, User $user)
    {
        if(!$this->maxVideosDay OR !$this->maxVideosSevenDays){
            $this->maxVideosDay         = $this->em->getRepository(Collector::class)->getOneByKey('max_videos_per_day');
            $this->maxVideosSevenDays   = $this->em->getRepository(Collector::class)->getOneByKey('max_videos_per_seven_days');
        }

        if($user->getFavorites()->first()) {
            /** @var UserFavorites $fav */
            foreach($user->getFavorites() as $fav){
                if($fav->getPageContent()->getId() == $pageContent->getId()){
                    return true;
                }
            }
        }

        $dateToday = new \DateTime();
        $dateToday->setTime(0, 0, 0);
        $datePeriod = $dateToday;
        $datePeriod->modify('-7 DAY');

        $amountToday = $this->em->createQueryBuilder()
            ->select('COUNT(uvl.id) as amount')
            ->from(UserWatchLog::class, 'uvl')
            ->where('uvl.user = :user')
            ->andWhere('uvl.updated > :today')
            ->andWhere('uvl.pageContent != :pageContent')
            ->setParameter('user', $user)
            ->setParameter('today', $dateToday)
            ->setParameter('pageContent', $pageContent)
            ->getQuery()
            ->getSingleScalarResult();

        if ((int)$amountToday < (int)$this->maxVideosDay) {
            $amountPeriod = $this->em->createQueryBuilder()
                ->select('COUNT(uwl.id) as amount')
                ->from(UserWatchLog::class, 'uwl')
                ->where('uwl.user = :user')
                ->andWhere('uwl.updated > :period')
                ->andWhere('uwl.pageContent != :pageContent')
                ->setParameter('user', $user)
                ->setParameter('period', $datePeriod)
                ->setParameter('pageContent', $pageContent)
                ->getQuery()
                ->getSingleScalarResult();
            if ((int)$amountPeriod < (int)$this->maxVideosSevenDays) {
                return true;
            }
        }
        return false;
    }

    /**
     * @param User $user
     * @param PageContent $pageContent
     * @return bool|string
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function allowedToAddToFavorites(User $user, PageContent $pageContent){

        if(!$this->maxFavoritesFree OR !$this->maxFavoritesPaid){
            $this->maxFavoritesFree   = $this->em->getRepository(Collector::class)->getOneByKey('max_favorites_free');
            $this->maxFavoritesPaid   = $this->em->getRepository(Collector::class)->getOneByKey('max_favorites_paid');
        }

        $countPaid = 0;
        $countFree = 0;
        $amount = count($user->getFavorites());
        if($amount > 0){
            /** @var UserFavorites $fav */
            foreach($user->getFavorites() as $fav){
                if($fav->getPageContent()->getPaid()){
                    $countPaid++;
                } else {
                    $countFree++;
                }

                if($fav->getPageContent()->getId() == $pageContent->getId()){
                    $this->em->remove($fav);
                    $this->em->flush();
                    return 'removed';
                }
            }
        }

        if($pageContent->getPaid()){
            if($countPaid < $this->maxFavoritesPaid){
                $favorite = new UserFavorites();
                $favorite->setUser($user);
                $favorite->setPageContent($pageContent);
                $this->em->persist($favorite);
                $this->em->flush();
                return 'add';
            }
        } else {
            if($countFree < $this->maxFavoritesFree){
                $favorite = new UserFavorites();
                $favorite->setUser($user);
                $favorite->setPageContent($pageContent);
                $this->em->persist($favorite);
                $this->em->flush();
                return 'add';
            }
        }
        return false;
    }
}