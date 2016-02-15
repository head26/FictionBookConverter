<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 13:55
 */
class FB2BuilderBookTitle extends FB2BuilderAbstractBuildXML
{
    protected $lang = NULL;
    protected $title = NULL;

    /**
     * @return string|null
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @param string $lang
     */
    public function setTitle($title, $lang)
    {
        $this->title = $title;
        $this->title = $lang;
    }

    static public function getXMLNodeName()
    {
        // TODO: Implement getXMLNodesName() method.
    }


}