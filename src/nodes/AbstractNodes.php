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
        $parent = isset($this->getXMLNodesName()['parent']) && !empty($this->getXMLNodesName()['parent']) ? $this->getXMLNodesName()['parent'] : FALSE;
        $property = isset($this->getXMLNodesName()['property']) && !empty($this->getXMLNodesName()['property']) ? $this->getXMLNodesName()['property'] : FALSE;
        $parentXML = NULL;
        $nodes = [];
        if($parent){
            $parentXML = $domDoc->createElement($parent);
            $domDoc->appendChild($parentXML);
        }

        foreach($this as $key => $val) {

            if(is_object($val)) {
                $result = $val->buildXML($domDoc);
                if($parent) {
                    foreach ($result as $obj) {
                        $parentXML->appendChild($domDoc->importNode($obj, TRUE));
                    }
                } else {
                    $nodes[] = $result;
                }
            } else {
                $xmlNodeName = is_array($property) && array_search($key,$property) ? array_search($key,$property) : $key;

                if(!empty($val)) {
                    if(is_array($val)) {
                        foreach($val as $item){
                            $nodes[] = $domDoc->createElement($xmlNodeName,$item);
                        }
                    } else {
                        $nodes[] = $domDoc->createElement($xmlNodeName,$val);
                    }
                }
            }
        }
        if($parent){
            foreach($nodes as $obj) {
                $parentXML->appendChild($obj);
            }
        }

        if(!empty($parentXML))
            return [$parentXML];
        elseif(!empty($nodes))
            return $nodes;
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
