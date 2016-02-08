<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 08.02.2016
 * Time: 10:46
 */
class FB2BuilderId extends FB2BuilderAbstractNodes
{
    protected $id = NULL;

    /**
     * @return null
     */
    public function getValue()
    {
        return $this->id;
    }


    /**
     * @param $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    function buildXML($xml)
    {
        // TODO: Implement getXML() method.
    }
}