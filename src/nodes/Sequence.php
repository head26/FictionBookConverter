<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 16:08
 */
namespace FB2Builder\nodes;
/**
 * Class Sequence
 * @package FB2Builder\nodes
 */
class Sequence extends AbstractBuildXML
{
    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'sequence';
    }
}