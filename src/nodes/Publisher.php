<?php
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 18.02.2016
 * Time: 13:17
 */

namespace FB2Builder\nodes;


/**
 * Class Publisher
 * @package FB2Builder\nodes
 */
class Publisher extends Author
{
    /**
     * @var string
     */
    protected $value = '';


    /**
     * Set value
     * @param $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
    /**
     * Get value
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'publisher';
    }
}