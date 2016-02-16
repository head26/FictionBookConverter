<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 16:07
 */
namespace FB2Builder\nodes;
/**
 * Class SrcLang
 * @package FB2Builder
 */
class SrcLang extends Lang
{

    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'src-lang';
    }


}