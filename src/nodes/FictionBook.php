<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 15:59
 */
namespace FB2Builder\nodes;

/**
 * Class FictionBook
 * @package FB2Builder\nodes
 */
class FictionBook extends AbstractBuildXML
{
    /**
     * <stylesheet> - 0..n (любое число, опционально);
     * @var StyleSheet
     */
    protected $stylesheet;
    /**
     * @var Description
     */
    protected $description;
    /**
     * @var array Body
     */
    protected $body = [];
    /**
     * @var Binary
     */
    protected $binary;

    /**
     * description - 1 (один, обязателен);
     * @return Description
     */
    public function getDescription()
    {
        if(!$this->description instanceof Description)
            return $this->description = new Description();
        return $this->description;
    }

    /**
     * body - 1..n (любое число, один обязaтелен);
     * @param $id
     * @return Body
     */
    public function getBody($id)
    {
        if(isset($this->body[$id]))
            return $this->body[$id];
        else
            return $this->body[$id] = new Body();
    }

    /**
     * binary - 0..n (любое число, опционально).
     * @return Binary
     */
    public function getBinary()
    {
        if(!$this->binary instanceof Binary)
            return $this->binary = new Binary();
        return $this->binary;
    }


    /**
     * @return array
     */
    public function getAttribute()
    {
        return [
            'xmlns' => 'http://www.gribuser.ru/xml/fictionbook/2.0',
            'xmlns:xlink' => 'http://www.w3.org/1999/xlink'
        ];
    }

    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'FictionBook';
    }

}
