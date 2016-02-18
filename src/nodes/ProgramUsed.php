<?php
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 18.02.2016
 * Time: 12:43
 */

namespace FB2Builder\nodes;


/**
 * Class ProgramUsed
 * @package FB2Builder\nodes
 */
class ProgramUsed extends AbstractNode
{
    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'program-used';
    }

}