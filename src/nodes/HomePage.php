<?php
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 16.02.2016
 * Time: 13:12
 */

namespace FB2Builder;


/**
 * Class HomePageHomePage
 * @package FB2Builder
 */
class HomePage extends AbstractNode
{
    /**
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'home-page';
    }

}