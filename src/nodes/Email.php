<?php
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 16.02.2016
 * Time: 13:18
 */

namespace FB2Builder;


/**
 * Class Email
 * @package FB2Builder
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