<?php
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 16.02.2016
 * Time: 13:12
 */

namespace FB2Builder\nodes;


/**
 * Class HomePageHomePage
 * @package FB2Builder\nodes
 */
class HomePage extends AbstractNode
{
    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'home-page';
    }

}