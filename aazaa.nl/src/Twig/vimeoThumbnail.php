<?php

namespace App\Twig;

class vimeoThumbnail extends \Twig_Extension
{
    /**
     * @return array
     */
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('vimeo_thumbnail', [$this, 'thumbnail'])
        );
    }

    /**
     * @param $imgid
     */
    public function thumbnail($imgid)
    {

        $hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/{$imgid}.php"));
        if(isset($hash[0])) {
            echo $hash[0]['thumbnail_large'];
        }
    }
}




