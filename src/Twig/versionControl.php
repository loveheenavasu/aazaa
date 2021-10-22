<?php

namespace App\Twig;


use Psr\Container\ContainerInterface;

class versionControl extends \Twig_Extension {

    protected $container;

    /**
     * versionControl constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container){
        $this->container = $container;
    }

    /**
     * @return array|\Twig_Filter[]
     */
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('versionControl', [$this, 'versionControl']),
        );
    }

    /**
     * @param $file
     * @return string
     */
    public function versionControl($file){
        $webdir = $this->container->get('kernel')->getProjectDir().'/public';

        $originalFile = $file;
        try {
            if (strpos($file, '?')) {
                $file = $file . '&v=' . md5_file($webdir . $file);
            } else {
                $file = $file . '?v=' . md5_file($webdir . $file);
            }
            return $file;
        }
        catch (\Exception $exception) {
            return $originalFile;
        }

    }


}