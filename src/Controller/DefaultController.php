<?php

namespace App\Controller;

use App\Entity\Collector;
use App\Entity\PageContent;
use App\Entity\BackgroundImage;
use App\Entity\PageContentCategory;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
#use Fungio\GoogleCalendarBundle\Service\GoogleCalendar;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends AbstractController
{

    /**
     * @return Response
     */
    public function index()
    {
         $request = $this->get('request_stack')->getMasterRequest();

         if ($request->query->has('code') || $request->query->has('register')) {

            /** @var GoogleCalendar $googleCalendar */
            $googleCalendar = $this->get('fungio.google_calendar');
            $googleCalendar->setRedirectUri("https://www.aazaa.nl");
            $googleCalendar->setCredentialsPath(getcwd() . '/../.credentials/calendar.json');
            $googleCalendar->setClientSecretPath(getcwd() . '/../Resources/GoogleCalendarBundle/client_secret.json');

            if ($request->query->has('code') && $request->get('code')) {
                $client = $googleCalendar->getClient($request->get('code'));
            } else {
                $client = $googleCalendar->getClient();
            }

            if (is_string($client)) {
                return new RedirectResponse($client);
            }

            print_r($googleCalendar->addEvent('b.h.padding@gmail.com', new \DateTime(), new \DateTime(), "Summary", "Description", 'B@DAMNGOOD.one', "Some location"));
        } 

        $pageContent = $this->getDoctrine()->getManager()->getRepository(PageContent::class)->findOneBy(['path' => '']);
        if ($pageContent) {
            if (!$pageContent->getAccountRequired()) {
                return $this->render('Templates/' . $pageContent->getTemplate() . '.html.twig', [
                    'pageContent' => $pageContent
                ]);
            } else {
                return $this->redirectToRoute('account_login');
            }
        }
        return new Response($this->renderView('Error/404.html.twig', ['slug' => '']), 404);
    }

    /**
     * @return Response
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function privacystatement()
    {

        $collector = $this->getDoctrine()->getRepository(Collector::class)->getOneByKey('algemene_voorwaarden_en_privacystatement');
        if ($collector) {

            return $this->render('Templates/content.html.twig', [
                'pageContent' => [
                    'metaTitle' => 'Algemene voorwaarden en Privacystatement | Aazaa.org',
                    'metaDescription' => '',
                    'content' => $collector,
                ]
            ]);
        }
        return new Response($this->renderView('Error/404.html.twig', ['slug' => '']), 404);
    }


    /**
     * @param $route
     * @return Response
     */
    public function navigation($route)
    {
        return $this->render('/Base/navbar.html.twig', [
            'route'         => $route,
            'menuItems'     => $this->getDoctrine()->getRepository(PageContentCategory::class)->getMenuItems()
        ]);
    }

    /**
     * @return Response
     */
    public function navigationMiddle()
    {
        return $this->render('/Blocks/shareButtons.html.twig', [
            'menuItems'     => $this->getDoctrine()->getRepository(PageContentCategory::class)->getMenuItems()
        ]);
    }

    /**
     * @return Response
     */
    public function navigationMiddle2()
    {
        return $this->render('/Blocks/shareButtons2.html.twig', [
            'menuItems'     => $this->getDoctrine()->getRepository(PageContentCategory::class)->getMenuItems()
        ]);
    }

    public function background()
    {
        $img = '/images/background-light.jpg';
        $backgroundImage = $this->getDoctrine()->getRepository(BackgroundImage::class)->find(1);
        if ($backgroundImage instanceof BackgroundImage) {
            $img = $backgroundImage->getName();
        }
        return new Response($img);
    }

    /**
     * @return Response
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function footer()
    {
        return $this->render('/Base/footer.html.twig', [
            'collectorFooter' => $this->getDoctrine()->getRepository(Collector::class)->getOneByKey('footer_copyright')
        ]);
    }

    /**
     * @return Response
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function getBackgroundImage()
    {
        $backgroundImage = $this->getDoctrine()->getManager()->getRepository(BackgroundImage::class)->find(1);

        return $this->render('/Admin/Background/background.html.twig', [
            'backgroundImage' => $backgroundImage->getName()
        ]);
    }

    /**
     * @param $slug
     * @return bool|\Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @throws \Exception
     */
    public function pageCollector($slug)
    {
        $pageContentEm = $this->getDoctrine()->getManager()->getRepository(PageContent::class);

        $pageContent = $pageContentEm->findOneBy(['path' => $slug]);
        if (!$pageContent) {
            $pageContent = $pageContentEm->findOneBy(['path' => $slug . '/']);
        }

        if ($pageContent) {
            if ($pageContent->getVimeoId()) {
                $redirect = $this->get('page_content_helper')->checkRules($pageContent, $this->getUser());
                if ($redirect) {
                    return $this->redirect($redirect);
                }
            }
            $template = $pageContent->getTemplate();

            $mobileDetector = $this->get('mobile_detect.mobile_detector');
            if ($mobileDetector->isMobile() and $template == 'template1') {
                $template = 'template2';
            }
            return $this->render('Templates/' . $template . '.html.twig', [
                'pageContent' => $pageContent
            ]);
        }
        return new Response($this->renderView('Error/404.html.twig', ['slug' => $slug]), Response::HTTP_NOT_FOUND);
    }
}
