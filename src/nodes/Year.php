<?php
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 18.02.2016
 * Time: 13:35
 */

namespace FB2Builder\nodes;


/**
 * Class Year
 * @package FB2Builder\nodes
 */
class Year extends AbstractNode
{
    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'year';
    }

}