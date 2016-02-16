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
     * @var string
     */
    protected $value = '';
    /**
     * @var string
     */
    protected $attr = '';
    /**
     * @param $value
     * @param $attr
     */
    public function setValue($value, $attr = '')
    {
        $this->value = $value;
        $this->attr = $attr;
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