<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 14:16
 */
class FB2BuilderDate extends FB2BuilderAbstractNodes
{
    protected $date = '';

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    function buildXML(DOMDocument $domDoc)
    {
        // TODO: Implement getXML() method.
    }
}