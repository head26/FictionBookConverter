<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 14:16
 */
class FB2BuilderDate extends FB2BuilderAbstractBuildXML
{
    protected $date = NULL;

    /**
     * @return string|null
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

    static public function getXMLNodeName()
    {
        // TODO: Implement getXMLNodesName() method.
    }


}