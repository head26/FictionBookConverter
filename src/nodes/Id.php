<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 08.02.2016
 * Time: 10:46
 */
namespace FB2Builder;
/**
 * Class Id
 * @package FB2Builder
 */
class Id extends AbstractNode
{
    /**
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'id';
    }
}