<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 15.02.2016
 * Time: 20:06
 */
namespace FB2Builder;
/**
 * Class Firstname
 * @package FB2Builder
 */
class Firstname extends AbstractNode
{
    protected $attribute = [];
    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'first-name';
    }

    function getAttr()
    {
        return ['xml:lang' => $this->attr];
    }

}