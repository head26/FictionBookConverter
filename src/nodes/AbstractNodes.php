<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 08.02.2016
 * Time: 13:58
 */
abstract class FB2BuilderAbstractNodes implements FB2BuilderInterfaceNodes
{
    function buildXML(){
       // print_r($this);
        //print_r($this->getXMLNodesName());
        //echo $this->getXMLNodesName()['parent'];
        $parent = $this->getXMLNodesName()['parent'];
        $property = isset($this->getXMLNodesName()['property']) ? $this->getXMLNodesName()['property'] : FALSE;
        $nodes = [];
        $domDoc = new DOMDocument("1.0", "UTF-8");
        $domDoc->preserveWhiteSpace = false;
        $domDoc->formatOutput = true;

        foreach($this as $key => $val) {
            if(is_object($val)) {
                //хуйня
                $nodes = $val->buildXML();
            } else {
                if(is_array($property) && array_search($key,$property)) {
                    $xmlNodeName = array_search($key,$property);
                } else {
                    $xmlNodeName = $key;
                }
                if(is_array($val)) {
                    foreach($val as $item){
                        $nodes[] = $domDoc->createElement($xmlNodeName,$item);
                    }
                } else {
                    $nodes[] = $domDoc->createElement($xmlNodeName,$val);
                }
                //echo $xmlNodeName.' = '.$val."\r\n";

            }
        }
        if(!empty($nodes))
            return $nodes;
        echo $domDoc->saveXML();
       // print_r($this);
    }
}
/*$domDoc = new DOMDocument("1.0", "UTF-8");
$domDoc->preserveWhiteSpace = false;
$domDoc->formatOutput = true;
$fb = $domDoc->createElementNS('http://www.gribuser.ru/xml/fictionbook/2.0','FictionBook');
$fb->setAttributeNS(
    'http://www.w3.org/2000/xmlns/',
    'xmlns:xlink',
    'http://www.w3.org/1999/xlink'
);
$domDoc->appendChild($fb);
echo $domDoc->saveXML();*/