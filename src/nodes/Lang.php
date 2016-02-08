<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 14:17
 */
class FB2BuilderLang extends FB2BuilderAbstractNodes
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

    function buildXML($xml)
    {
        // TODO: Implement getXML() method.
    }
}