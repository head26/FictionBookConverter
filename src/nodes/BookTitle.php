<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 13:55
 */
namespace FB2Builder\nodes;
/**
 * Class BookTitle
 * @package FB2Builder\nodes
 */
class BookTitle extends AbstractNode
{
    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'book-title';
    }
}