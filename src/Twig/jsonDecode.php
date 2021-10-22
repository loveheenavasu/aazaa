<?php

namespace App\Twig;

class jsonDecode extends \Twig_Extension
{
    /**
     * @return array
     */
    public function getFilters() {
        return array(
            new \Twig_SimpleFilter('json_decode', [$this,'jsonDecode']),
            new \Twig_SimpleFilter('json_decode_to_array', [$this,'jsonDecodeToArray']),
            new \Twig_SimpleFilter('implode', [$this,'implodeArray'])
        );
    }
    /**
     * @param $str
     * @return mixed
     */
    public function jsonDecode($str) {
        $output = json_decode($str, true);
        return $output;
    }
    /**
     * @param $str
     * @return mixed
     */
    public function jsonDecodeToArray($str) {
        $output = json_decode($str, true);
        return $output;
    }
    /**
     * @param $array
     * @return string
     */
    public function implodeArray($array){
        return implode(',', $array);
    }

}