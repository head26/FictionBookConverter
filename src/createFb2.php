<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 29.01.2016
 * Time: 16:08
 */
class createFb2
{
    private $domDoc;
    private $fB;
    public function __construct()
    {
        $this->domDoc = new \DOMDocument('1.0', 'UTF-8');
        $this->fB = $this->domDoc->createElement('FictionBook');
        $this->fB->setAttribute('xmlns','http://www.gribuser.ru/xml/fictionbook/2.0');
        $this->fB->setAttribute('xmlns:xlink','http://www.w3.org/1999/xlink');
        $this->domDoc->appendChild($this->fB);
    }
    public function setDesc () {
        $description = $this->domDoc->createElement('description');
        $this->fB->appendChild($description);
    }
    public function saveXML(){
        return $this->domDoc->saveXML();;
    }
}