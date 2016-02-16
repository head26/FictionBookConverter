<?php
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 16.02.2016
 * Time: 13:09
 */

namespace FB2Builder;


/**
 * Class Nickname
 * @package FB2Builder
 */
class Nickname extends AbstractNode
{
    /**
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'nickname';
    }

    /**
     * @return array
     */
    public function getAttr()
    {
        return ['xml:lang' => $this->attr];
    }
}