<?php
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 18.02.2016
 * Time: 13:37
 */

namespace FB2Builder\nodes;


/**
 * Class Isbn
 * @package FB2Builder\nodes
 */
class Isbn extends AbstractNode
{
    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'isbn';
    }
}