<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 16:08
 */
class FB2BuilderSequence extends FB2BuilderAbstractNodes
{
    protected $name = '';
    protected $number = '';
    protected $xmlLang = '';

    /**
     * @param $name
     * @param $number
     */
    public function setSequence($name, $number)
    {
        $this->name = $name;
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    function getXML(DOMDocument $xml)
    {
        // TODO: Implement getXML() method.
    }
}