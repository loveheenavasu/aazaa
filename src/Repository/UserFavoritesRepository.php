<?php

namespace App\Repository;

use App\Entity\UserFavorites;
use Doctrine\ORM\EntityRepository;

class UserFavoritesRepository extends EntityRepository
{
    /**
     * @param \DateTime $date
     * @return UserFavorites[] array
     */
    public function getUserFavoritesOlderThen(\DateTime $date){
        return $this->getEntityManager()->createQueryBuilder()
            ->select('f')
            ->from(UserFavorites::class, 'f')
            ->where('f.created < :date')
            ->setParameter('date', $date)
            ->getQuery()
            ->getResult();
    }


}