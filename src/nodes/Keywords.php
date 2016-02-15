<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 14:06
 */
class FB2BuilderKeywords extends FB2BuilderAbstractBuildXML
{
    protected $keywords = NULL;

    /**
     * @return string|null
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

    static public function getXMLNodeName()
    {
        // TODO: Implement getXMLNodesName() method.
    }


}