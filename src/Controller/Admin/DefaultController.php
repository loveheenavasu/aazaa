<?php

namespace App\Controller\Admin;

use App\Entity\BackgroundImage;
use App\Entity\User;
use App\Entity\UserWatchLog;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends AbstractController
{

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(){
        $em = $this->getDoctrine()->getManager();
        return $this->render('Admin/index.html.twig', [
            'newUsers'    => $em->getRepository(User::class)->findBy([],['created' => 'ASC'],10),
            'lastViewed'  => $em->getRepository(UserWatchLog::class)->findBy([],['updated' => 'ASC'],10)
        ]);
    }

        /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function veranderDeAchtergrond(Request $request) {
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        $backgroundImage = $em->getRepository(BackgroundImage::class)->find(1);

        if ($request->isMethod('POST')) {
            $file = $request->files->get('image');
            if($file){
                $allowedTypes = ['image/x-png','image/png','image/jpeg','image/gif', 'image/jpg'];
                $baseDir = $this->get('kernel')->getProjectDir().'/public';
                $imageDir = '/images/';
                $imageName = uniqid().'.'.$file->guessExtension();
                if(in_array($file->getMimeType(), $allowedTypes) ) {
                    if($file->move($baseDir.$imageDir, $imageName)) {
                        if (file_exists($baseDir . $backgroundImage->getName())) {
                            unlink($baseDir . $backgroundImage->getName());
                        }
                        $backgroundImage->setName($imageDir.$imageName);
                    }
                    $em->persist($backgroundImage);
                    $em->flush();

                    $this->addFlash("success", 'Achtergrondafbeelding succesvol geüpload');

                    return $this->redirectToRoute('admin_background_index');
                } else {
                    $this->addFlash("warning", 'Uploaden van achtergrondafbeelding mislukt');
                }
            }
        }

        return $this->render('Admin/Background/index.html.twig', [
            'background' => $backgroundImage
        ]);
    }


    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function imageUpload(Request $request){

        $allowdTypes = ['image/png','image/jpeg','image/gif'];

        foreach ($request->files as $file) {
            if(in_array($file->getMimeType(), $allowdTypes) ) {
                $fileName = md5(uniqid() . '_' . $file->getClientOriginalName()).'.'. $file->guessExtension();
                if($file->move(getenv('WEBDIR').'images/uploads/', $fileName)){
                    return New JsonResponse([
                        'location' => '/images/uploads/'.$fileName,
                    ]);
                }
            }
        }
    }

//    public function imageUpload(Request $request){
//
//        $allowdTypes = ['image/png','image/jpeg','image/gif'];
//
//        foreach ($request->files as $file) {
//            if(in_array($file->getMimeType(), $allowdTypes) ) {
//                $fileName = md5(uniqid() . '_' . $file->getClientOriginalName()).'.'. $file->guessExtension();
//                if($file->move(getenv('WEBDIR').'images/uploads/', $fileName)){
//                    return New JsonResponse([
//                        'location' => '/images/uploads/'.$fileName,
//                    ]);
//                }
//            }
//        }
//    }
//
//    public function getAllPageUrls(){
//
//        $em = $this->getDoctrine()->getManager();
//
//        return $this->render('WebsiteBundle:admin:pagelist.json.twig', [
//            'pageUrls'      => $em->getRepository('WebsiteBundle:PageUrl')->findBy(['disabled' => false]),
//            'makes'         => $em->getRepository('WebsiteBundle:VehicleMake')->findAll(),
//            'bodystyles'    => $em->getRepository('WebsiteBundle:VehicleBodystyle')->findAll(),
//            'models'        => $em->getRepository('WebsiteBundle:VehicleModel')->findAll()
//        ]);
//    }

}