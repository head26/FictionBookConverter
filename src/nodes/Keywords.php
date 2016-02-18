<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 14:06
 */
namespace FB2Builder\nodes;
/**
 * Class Keywords
 * @package FB2Builder\nodes
 */
class Keywords extends AbstractNode
{
    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'keywords';
    }
}