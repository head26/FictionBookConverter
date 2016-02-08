<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 14:06
 */
class FB2BuilderKeywords extends FB2BuilderAbstractNodes
{
    protected $keywords = '';

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

    function buildXML($xml)
    {
        // TODO: Implement getXML() method.
    }
}