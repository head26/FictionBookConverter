<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 14:06
 */
namespace FB2Builder\nodes;
/**
 * Class Keywords
 * @package FB2Builder
 */
class Keywords extends AbstractBuildXML
{
    protected $keywords;

    /**
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param string $keywords
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
    }

    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'keywords';
    }


}