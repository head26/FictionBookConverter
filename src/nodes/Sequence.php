<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 16:08
 */
namespace FB2Builder\nodes;
/**
 * Class Sequence
 * @package FB2Builder
 */
class Sequence extends AbstractBuildXML
{
    protected $name;
    protected $number;
    protected $xmlLang;

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