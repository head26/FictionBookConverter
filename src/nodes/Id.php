<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 08.02.2016
 * Time: 10:46
 */
namespace FB2Builder;
class Id extends AbstractBuildXML
{
    protected $id = NULL;

    /**
     * @return string|null
     */
    public function getValue()
    {
        return $this->id;
    }


    /**
     * @param string $id
     * @return Id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    static public function getXMLNodeName()
    {
        // TODO: Implement getXMLNodesName() method.
    }


}