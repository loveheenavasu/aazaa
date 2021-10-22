<?php

namespace App\Controller;

use App\Entity\PageContent;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class AjaxController extends AbstractController
{
    /**
     * @param Request $request
     * @return JsonResponse
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function toggleFavorite(Request $request){
        $pageContent = $this->getDoctrine()->getRepository(PageContent::class)->findOneBy([
            'id' => $request->get('pageContentId')
        ]);
        if($pageContent AND $this->getUser()) {
            $status = $this->get('page_content_helper')->allowedToAddToFavorites($this->getUser(), $pageContent);
            if($status){
                switch($status){
                    case 'removed':
                        return new JsonResponse(['status' => true, 'added' => false]);
                        break;
                    case 'add':
                        return new JsonResponse(['status' => true, 'added' => true]);
                        break;
                }
            }
        }

        return new JsonResponse(['status' => false]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @throws \Swift_TransportException
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function shareVideo(Request $request){

        if($this->isCsrfTokenValid('share', $request->get('csrf_token')) && $request->get('name') && $request->get('email') && $request->get('pageContentId')) {
            $pageContent = $this->getDoctrine()->getRepository(PageContent::class)->findOneBy([
                'id' => $request->get('pageContentId')
            ]);
            if($this->get('mail_helper')->sendShareVideoMail($this->getUser(), $request->get('name'), $request->get('email'), $pageContent)){
                return $this->redirectToRoute('page_loader', ['slug' => $pageContent->getPath()]);
            }
        }
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @throws \Swift_TransportException
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function sharePage(Request $request){

        if($this->isCsrfTokenValid('share', $request->get('csrf_token')) && $request->get('name') && $request->get('email') && $request->get('pageUrl')) {
            if($this->get('mail_helper')->sendSharePageMail($this->getUser(), $request->get('name'), $request->get('email'), $request->get('pageUrl'))){
                return $this->redirect($request->get('pageUrl'));
            }
        }
    }


}