<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 15.02.2016
 * Time: 20:06
 */
class FB2BuilderFirstname extends FB2BuilderAbstractNodes
{
    protected $value = '';
    protected $attrLang = '';

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }


    /**
     * @param $value
     * @param $attrLang
     */
    public function setValue($value, $attrLang = '')
    {
        $this->value = $value;
        $this->attrLang = $attrLang;
    }

    /**
     * @return string
     */
    public function getAttrLang()
    {
        return $this->attrLang;
    }

    static public function getXMLNodesName()
    {
        return [
            'property' => [
                 'first-name' => 'firstname',
            ]
        ];
    }

    function getAttr()
    {
        return ['xml:lang' => $this->attrLang];
    }

}