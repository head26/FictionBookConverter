<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 23:06
 */
namespace FB2Builder\nodes;
/**
 * Class ScrTitleInfo
 * @package FB2Builder\nodes
 */
class SrcTitleInfo extends TitleInfo
{
    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'src-title-info';
    }
}