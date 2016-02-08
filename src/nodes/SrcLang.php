<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 16:07
 */
class FB2BuilderSrcLang extends FB2BuilderAbstractNodes
{
    protected $lang = '';

    /**
     * @return string
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

    function buildXML(DOMDocument $domDoc)
    {
        // TODO: Implement getXML() method.
    }
}