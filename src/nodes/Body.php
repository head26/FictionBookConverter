<?php
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 22.02.2016
 * Time: 16:45
 */

namespace FB2Builder\nodes;


class Body extends AbstractNode
{
    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'body';
    }
}