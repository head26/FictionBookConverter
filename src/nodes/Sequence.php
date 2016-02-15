<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 16:08
 */
class FB2BuilderSequence extends FB2BuilderAbstractBuildXML
{
    protected $name = NULL;
    protected $number = NULL;
    protected $xmlLang = NULL;

    /**
     * @param string $name
     * @param int $number
     */
    public function setSequence($name, $number)
    {
        $this->name = $name;
        $this->number = $number;
    }

    /**
     * @return int|null
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    static public function getXMLNodeName()
    {
        // TODO: Implement getXMLNodesName() method.
    }


}