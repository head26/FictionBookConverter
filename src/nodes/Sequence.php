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
 * @package FB2Builder\nodes
 */
class Sequence extends AbstractBuildXML
{
    // TODO: к работе.
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
    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'sequence';
    }


}