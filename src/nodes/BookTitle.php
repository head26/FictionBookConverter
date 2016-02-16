<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 13:55
 */
namespace FB2Builder;
/**
 * Class BookTitle
 * @package FB2Builder
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
    /**
     * @return array
     */
    public function getAttr()
    {
        return ['xml:lang' => $this->attr];
    }
}