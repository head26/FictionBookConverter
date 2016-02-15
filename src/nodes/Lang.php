<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 14:17
 */
class FB2BuilderLang extends FB2BuilderAbstractBuildXML
{
    protected $lang = NULL;

    /**
     * @return string|null
     */
    public function getValue()
    {
        return $this->lang;
    }

    /**
     * @param string $lang
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
    }

    static public function getXMLNodeName()
    {
        // TODO: Implement getXMLNodesName() method.
    }


}