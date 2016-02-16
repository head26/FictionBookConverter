<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 15.02.2016
 * Time: 21:01
 */
namespace FB2Builder;
/**
 * Class AbstractNode
 * @package FB2Builder
 */
abstract class AbstractNode extends AbstractBuildXML
{
    /**
     * @var array
     */
    protected $attribute;
    /**
     * @var string
     */
    protected $value = '';
    /**
     * @var string
     */
    protected $attr = '';
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
    /**
     * @return string
     */
    public function getAttr()
    {
        return $this->attr;
    }

}