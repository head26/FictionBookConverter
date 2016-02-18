<?php
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 16.02.2016
 * Time: 12:56
 */

namespace FB2Builder\nodes;


/**
 * Class Lastname
 * @package FB2Builder\nodes
 */
class Lastname extends AbstractNode
{
    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'last-name';
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