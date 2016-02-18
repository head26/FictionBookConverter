<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 15.02.2016
 * Time: 20:06
 */
namespace FB2Builder\nodes;
/**
 * Class Firstname
 * @package FB2Builder\nodes
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
    /**
     * @return array
     */
    public function getAttribute()
    {
        return [
            'xml:lang' => 'ru'
        ];
    }

}