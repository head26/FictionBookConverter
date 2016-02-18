<?php
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 18.02.2016
 * Time: 13:26
 */

namespace FB2Builder\nodes;


/**
 * Class CustomInfo
 * @package FB2Builder\nodes
 */
class CustomInfo extends AbstractNode
{
    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'custom-info';
    }
}