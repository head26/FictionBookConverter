<?php
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 16.02.2016
 * Time: 12:45
 */

namespace FB2Builder;


/**
 * Class Middlename
 * @package FB2Builder
 */
class Middlename extends AbstractNode
{

    /**
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'middle-name';
    }

    /**
     * @return array
     */
    public function getAttr()
    {
        return ['xml:lang' => $this->attr];
    }

}