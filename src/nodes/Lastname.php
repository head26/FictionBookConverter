<?php
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 16.02.2016
 * Time: 12:56
 */

namespace FB2Builder;


/**
 * Class Lastname
 * @package FB2Builder
 */
class Lastname extends AbstractNode
{
    /**
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'last-name';
    }

    /**
     * @return array
     */
    public function getAttr()
    {
        return ['xml:lang' => $this->attr];
    }
}