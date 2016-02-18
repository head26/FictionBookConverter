<?php
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 16.02.2016
 * Time: 13:09
 */

namespace FB2Builder\nodes;


/**
 * Class Nickname
 * @package FB2Builder\nodes
 */
class Nickname extends AbstractNode
{
    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'nickname';
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