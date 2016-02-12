<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 08.02.2016
 * Time: 13:58
 */
abstract class FB2BuilderAbstractNodes implements FB2BuilderInterfaceNodes
{
    function buildXML(DOMDocument $domDoc){
        // print_r($this);
        //print_r($this->getXMLNodesName());
        //echo $this->getXMLNodesName()['parent'];
        $parent = isset($this->getXMLNodesName()['parent']) ? $this->getXMLNodesName()['parent'] : FALSE;
        $property = isset($this->getXMLNodesName()['property']) ? $this->getXMLNodesName()['property'] : FALSE;

        foreach($this as $key => $val) {

            if(is_object($val)) {
                $resultXML = $val->buildXML($domDoc);

            } else {
                $xmlNodeName = is_array($property) && array_search($key,$property) ? array_search($key,$property) : $key;

                if(!empty($val)) {
                    if(is_array($val)) {
                        foreach($val as $item){
                            $domDoc->createElement($xmlNodeName,$item);
                        }
                    } else {
                        $domDoc->createElement($xmlNodeName,$val);
                    }
                }
                //echo $xmlNodeName.' = '.$val."\r\n";
//print_r($parentNode);
            }
        }
        if(!empty($parentNode))
            return $parentNode;
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


/*    function buildXML(){
        // print_r($this);
        //print_r($this->getXMLNodesName());
        //echo $this->getXMLNodesName()['parent'];
        $parent = isset($this->getXMLNodesName()['parent']) ? $this->getXMLNodesName()['parent'] : FALSE;
        $property = isset($this->getXMLNodesName()['property']) ? $this->getXMLNodesName()['property'] : FALSE;
        $domDoc = new DOMDocument("1.0", "UTF-8");
        $domDoc->preserveWhiteSpace = FALSE;
        $domDoc->formatOutput = TRUE;
        $parentNode = $domDoc->createElement($parent);
        foreach($this as $key => $val) {

            if(is_object($val)) {
                $resultXML = $val->buildXML();
                if(!empty($resultXML)) {
                    $parentNode->appendChild($domDoc->importNode($resultXML, TRUE));
                    $domDoc->appendChild($parentNode); echo $domDoc->saveXML();
                }
            } else {
                if(is_array($property) && array_search($key,$property)) {
                    $xmlNodeName = array_search($key,$property);
                } else {
                    $xmlNodeName = $key;
                }
                if(!empty($val)) {
                    if(is_array($val)) {
                        foreach($val as $item){
                            $parentNode->appendChild($domDoc->createElement($xmlNodeName,$item));
                        }
                    } else {
                        $parentNode->appendChild($domDoc->createElement($xmlNodeName,$val));
                    }
                }
                //echo $xmlNodeName.' = '.$val."\r\n";
//print_r($parentNode);
            }
        }
        if(!empty($parentNode))
            return $parentNode;
        // print_r($this);
    }*/