<?php
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 18.02.2016
 * Time: 13:24
 */

namespace FB2Builder\nodes;


/**
 * Class SrcUrl
 * @package FB2Builder\nodes
 */
class SrcUrl extends AbstractNode
{
    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'src-url';
    }
}