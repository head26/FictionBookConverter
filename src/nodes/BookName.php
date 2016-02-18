<?php
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 18.02.2016
 * Time: 13:29
 */

namespace FB2Builder\nodes;


/**
 * Class BookName
 * @package FB2Builder\nodes
 */
class BookName extends AbstractNode
{
    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'book-name';
    }

}