<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 14:17
 */
namespace FB2Builder;
/**
 * Class Lang
 * @package FB2Builder
 */
class Lang extends AbstractNode
{
    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'lang';
    }
}