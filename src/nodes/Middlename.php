<?php
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 16.02.2016
 * Time: 12:45
 */

namespace FB2Builder\nodes;


/**
 * Class Middlename
 * @package FB2Builder\nodes
 */
class Middlename extends AbstractNode
{

    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'middle-name';
    }
}