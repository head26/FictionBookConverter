<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 09.02.2016
 * Time: 14:34
 */
namespace FB2Builder\nodes;
/**
 * Interface InterfaceNode
 * @package FB2Builder
 */
interface InterfaceNode
{
    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName();
}