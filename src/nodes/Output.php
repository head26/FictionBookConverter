<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 23:12
 */
namespace FB2Builder\nodes;
/**
 * Class Output
 * @package FB2Builder\nodes
 */
class Output extends AbstractBuildXML
{
    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'output';
    }
}