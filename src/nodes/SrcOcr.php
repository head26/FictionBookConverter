<?php
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 18.02.2016
 * Time: 13:21
 */

namespace FB2Builder\nodes;


/**
 * Class SrcOcr
 * @package FB2Builder\nodes
 */
class SrcOcr extends AbstractNode
{
    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'src-ocr';
    }

}