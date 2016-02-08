<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 15:59
 */
class FB2BuilderFictionBook extends FB2BuilderAbstractNodes
{
    protected $description = NULL;
    protected $body = NULL;
    protected $stylesheet = NULL;
    protected $binary = NULL;

    /**
     * @return FB2BuilderDescription|null
     */
    public function getDescription()
    {
        if(!$this->description instanceof FB2BuilderDescription)
            return $this->description = new FB2BuilderDescription();
        return $this->description;
    }


    /**
     * @return FB2BuilderDescription|null
     */
    public function getBody()
    {
        if(!$this->description instanceof FB2BuilderDescription)
            return $this->description = new FB2BuilderDescription();
        return $this->description;
    }

    function getXML(DOMDocument $xml)
    {
        // TODO: Implement getXML() method.
    }
}