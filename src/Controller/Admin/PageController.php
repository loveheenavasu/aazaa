<?php

namespace App\Controller\Admin;

use App\Entity\PageContent;
use App\Entity\PageContentCategory;
use App\Entity\PageContentRelations;
use Doctrine\ORM\EntityManager;
use Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\FileBag;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class PageController extends AbstractController
{

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request){
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        $dql = $em->createQueryBuilder()
            ->select('p')
            ->from(PageContent::class, 'p')
            ->leftJoin('p.category', 'pc');

        if($cat = $em->getRepository(PageContentCategory::class)->findOneBy(['name' => $request->get('categorie')])){
            $dql->where('p.category = :cat')
                ->setParameter('cat', $cat);
        }

        $dql->orderBy('p.category', 'DESC');
        $videos = $dql->getQuery();

        $pagination = $this->get('knp_paginator')->paginate(
            $videos,
            $request->query->getInt('page', 1),
            $request->get('aantal' , 50)
        );

        return $this->render('Admin/Page/pageIndex.html.twig', [
            'pagination' => $pagination,
            'categorylist' => $em->getRepository(PageContentCategory::class)->findAll()
        ]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function edit(Request $request){
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        /** @var PageContent $pageContent */
        $pageContent = $em->getRepository(PageContent::class)->findOneBy(['id' => $request->get('pageContentId')]);

        if($request->getMethod() == 'POST'){
            if(!$pageContent){
                $pageContent = new PageContent();
            }
            else {
                /** reset all relations  */
                foreach($pageContent->getPageContentRelations() as $relation){
                    $em->remove($relation);
                }
            }

            $pageContent->setCategory(null);
            if($category = $em->getRepository(PageContentCategory::class)->findOneBy(['id' => $request->get('category')])) {
                $pageContent->setCategory($category);
            }
            $pageContent->setTemplate($request->get('template'));
            $pageContent->setVimeoId($request->get('vimeoId'));

            $pageContent->setTitle($request->get('title'));
            $pageContent->setMetaTitle($request->get('metaTitle'));
            $pageContent->setMetaDescription($request->get('metaDescription'));
            $pageContent->setContent($request->get('content'));
            $pageContent->setShortDescription($request->get('shortDescription'));
            $pageContent->setPreviewBottom($request->get('previewBottom'));
            $pageContent->setPreviewTop($request->get('previewTop'));

            $pageContent->setActive($request->get('active'));
            $pageContent->setPaid($request->get('paid'));
            $pageContent->setAccountRequired($request->get('accountRequired'));

            $pageContent->setSlug($request->get('slug'));
            $pageContent->setPath($request->get('slug', $pageContent->getTitle()));


            $em->persist($pageContent);
            $em->flush();

            /** set new relations */
            if($request->get('location')) {
                foreach ($request->get('location') as $location => $value) {
                    foreach ($value as $position => $pageContentId) {
                        if ($pageContentLinked = $em->getRepository(PageContent::class)->findOneBy(['id' => $pageContentId])) {
                            if(!$pageContentRelation = $em->getRepository(PageContentRelations::class)->findOneBy(['pageContent' => $pageContent, 'location' => $location, 'position' => $position])){
                                $pageContentRelation = new PageContentRelations();
                                $pageContentRelation->setLocation($location);
                                $pageContentRelation->setPosition($position);
                                $pageContentRelation->setPageContent($pageContent);
                            }
                            $pageContentRelation->setPageContentLinked($pageContentLinked);
                            $em->persist($pageContentRelation);
                            $em->flush();
                        }
                    }
                }
            }

            $this->addFlash("success", 'Pagina: '.$request->get('title').' opgeslagen');
            return $this->redirectToRoute('admin_page_overview');
        }

        return $this->render('Admin/Page/pageEdit.html.twig', [
            'pageContent' => $pageContent,
            'categoryList' => $em->getRepository(PageContentCategory::class)->findAll()
        ]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function editContent(Request $request){
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        /** @var PageContent $pageContent */
        $pageContent = $em->getRepository(PageContent::class)->findOneBy(['id' => $request->get('pageContentId')]);

        if($request->getMethod() == 'POST'){
            if(!$pageContent){
                $pageContent = new PageContent();
                $pageContent->setTemplate('content');
            }

            $pageContent->setCategory(null);
            if($category = $em->getRepository(PageContentCategory::class)->findOneBy(['id' => $request->get('category')])) {
                $pageContent->setCategory($category);
            }
            $pageContent->setTitle($request->get('title'));
            $pageContent->setMetaTitle($request->get('metaTitle'));
            $pageContent->setMetaDescription($request->get('metaDescription'));
            $pageContent->setContent($request->get('content'));
            $pageContent->setShortDescription($request->get('shortDescription'));
            $pageContent->setPreviewBottom($request->get('previewBottom'));
            $pageContent->setPreviewTop($request->get('previewTop'));

            $pageContent->setActive($request->get('active'));
            $pageContent->setPaid($request->get('paid'));
            $pageContent->setAccountRequired($request->get('accountRequired'));

            $pageContent->setSlug($request->get('slug', $pageContent->getTitle()));
            $pageContent->setPath($request->get('slug', $pageContent->getTitle()));


            $em->persist($pageContent);
            $em->flush();

            $this->addFlash("success", 'Pagina: '.$request->get('title').' opgeslagen');
            return $this->redirectToRoute('admin_page_overview');
        }

        return $this->render('Admin/Page/contentPageEdit.html.twig', [
            'pageContent' => $pageContent,
            'categoryList' => $em->getRepository(PageContentCategory::class)->findAll()
        ]);
    }

    /**
     * Load template settings
     * @param Request $request
     * @return JsonResponse
     */
    public function getTemplateSettings(Request $request){

        if($template = $request->get('template')){
            $em =  $this->getDoctrine()->getManager();
            $categoryList = $em->getRepository(PageContentCategory::class)->findAll();
            $pageContent = $em->getRepository(PageContent::class)->findOneBy(['id' => $request->get('pageContent')]);
            return new JsonResponse([
                'status' => true,
                'html' => $this->renderView('Admin/Page/Blocks/'.$template.'.html.twig', [
                    'categoryList' => $categoryList,
                    'pageContent' => $pageContent
                ])
            ]);

        }
        return new JsonResponse([
            'status' => false
        ]);
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function category(Request $request){
        return $this->render('Admin/Page/categoryIndex.html.twig', [
            'category' => $this->getDoctrine()->getRepository(PageContentCategory::class)->findBy([],[
                'viewPosition'   => 'DESC',
                'position'      => 'ASC',
                'id'            => 'ASC'
            ])
        ]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function editCategory(Request $request){
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        $category = $em->getRepository(PageContentCategory::class)->findOneBy(['id' => $request->get('categoryId')]);

        if($request->getMethod() == 'POST' AND $request->get('name')) {
            if (!$category) {
                $category = new PageContentCategory();
            }
            $category->setName($request->get('name'));
            $category->setAlias($request->get('name'));
            $category->setCssFilter($request->get('filter'));
            $category->setViewPosition($request->get('viewPosition', null));


            $file = $request->files->get('image');
            if($file){
                $allowedTypes = ['image/x-png','image/png','image/jpeg','image/gif'];
                $baseDir = $this->get('kernel')->getProjectDir().'/public';
                $imageDir = '/images/uploads/';
                $imageName = $request->get('name').'.'.$file->guessExtension();
                if(in_array($file->getMimeType(), $allowedTypes) ) {
                    if($file->move($baseDir.$imageDir, $imageName)){
                        $category->setImage($imageDir.$imageName);
                    }
                } else {
                    $this->addFlash("warning", 'Plaatje niet opgeslagen, voldoet niet aan de juiste indeling. png, jpeg en gif bestanden zijn toegestaan');
                }
            }


            if($pageContent = $em->getRepository(PageContent::class)->findOneBy(['id' => $request->get('pageContent')])){
                if($pageContentMenu = $em->getRepository(PageContentCategory::class)->findOneBy(['pageContent' => $pageContent])){
                    if($pageContentMenu->getPageContent()){
                        $pageContentMenu->setPageContent(null);
                        $em->persist($pageContentMenu);
                        $em->flush();
                    }
                }
            }

            $category->setPageContent($pageContent);
            $em->persist($category);
            $em->flush();

            $this->addFlash("success", 'Categorie: '.$request->get('name').' opgeslagen');
            return $this->redirectToRoute('admin_page_category');
        }


        return $this->render('Admin/Page/categoryEdit.html.twig', [
            'category'      => $category,
            'pageContents'  => $em->getRepository(PageContent::class)->findBy(['active' => true], ['title' => 'ASC'])
        ]);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function sort(Request $request)
    {
        if($request->get('id')) {
            $em = $this->getDoctrine()->getManager();
            if ($pos = $em->getRepository(PageContentCategory::class)->findOneBy(['id' => $request->get('id')])) {
                $pos->setPosition((int)$request->get('position'));
                $pos->setViewPosition($request->get('viewPosition'));
                $em->persist($pos);
                $em->flush();
            }

            return new JsonResponse([
                'status' => true
            ]);
        }
        return new JsonResponse([
            'status' => false
        ]);
    }
}