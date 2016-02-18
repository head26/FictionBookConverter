<?php
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 16.02.2016
 * Time: 13:18
 */

namespace FB2Builder\nodes;


/**
 * Class Email
 * @package FB2Builder\nodes
 */
class Email extends AbstractNode
{
    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'email';
    }
}