<?php
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 18.02.2016
 * Time: 13:42
 */

namespace FB2Builder\nodes;


/**
 * Class Binary
 * @package FB2Builder\nodes
 */
class Binary extends AbstractNode
{
    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'binary';
    }
}