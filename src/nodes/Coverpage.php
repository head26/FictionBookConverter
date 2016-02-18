<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 16:07
 */
namespace FB2Builder\nodes;
/**
 * Class Coverpage
 * @package FB2Builder\nodes
 */
class Coverpage extends AbstractBuildXML
{
    // TODO: походу надо делать массив объектов, разберусь позже.
    protected $image;
    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'coverpage';
    }

}