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
     * <description> - 1 (один, обязателен);
     * @var Description
     */
    protected $description;
    /**
     * <body> - 1..n (любое число, один обязaтелен);
     * @var Body
     */
    protected $body;
    /**
     * <binary> - 0..n (любое число, опционально).
     * @var Binary
     */
    protected $binary;

    /**
     * @return Description
     */
    public function getDescription()
    {
        if(!$this->description instanceof Description)
            return $this->description = new Description();
        return $this->description;
    }

    /**
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
