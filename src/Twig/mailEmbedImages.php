<?php

namespace App\Twig;


class mailEmbedImages extends \Twig_Extension{

    /**
     * @return array
     */
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('embed', [$this, 'embed']),
        );
    }

    /**
     * @param $path
     * @param \Swift_Message $message
     * @return string
     */
    public function embed($path, \Swift_Message $message) {
        return $message->embed(\Swift_Image::fromPath($path));
    }
}