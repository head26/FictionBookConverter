<?php
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 18.02.2016
 * Time: 13:11
 */

namespace FB2Builder\nodes;


/**
 * Class Version
 * @package FB2Builder\nodes
 */
class Version extends AbstractNode
{
    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'version';
    }
}