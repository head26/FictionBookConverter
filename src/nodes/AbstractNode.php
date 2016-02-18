<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 15.02.2016
 * Time: 21:01
 */
namespace FB2Builder\nodes;
/**
 * Class AbstractNode
 * @package FB2Builder\nodes
 */
abstract class AbstractNode extends AbstractBuildXML
{
    /**
     * @var string
     */
    protected $value = '';

    /**
     * @param $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}