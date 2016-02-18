<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 23:08
 */
namespace FB2Builder\nodes;
/**
 * Class PublishInfo
 * @package FB2Builder\nodes
 */
class PublishInfo extends AbstractBuildXML
{
    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'publish-info';
    }
}