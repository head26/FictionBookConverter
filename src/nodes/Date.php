<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 14:16
 */
namespace FB2Builder\nodes;
/**
 * Class Date
 * @package FB2Builder
 */
class Date extends AbstractNode
{
    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'date';
    }
    /**
     * @return array
     */
    public function getAttr()
    {
        return [
            'xml:lang' => $this->attr,
            'value' => ''
        ];
    }
}