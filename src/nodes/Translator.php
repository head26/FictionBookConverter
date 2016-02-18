<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 16:07
 */
namespace FB2Builder\nodes;
/**
 * Class Translator
 * @package FB2Builder\nodes
 */
class Translator extends Author
{
    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'translator';
    }
}