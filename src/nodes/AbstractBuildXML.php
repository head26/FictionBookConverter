<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 08.02.2016
 * Time: 13:58
 */
namespace FB2Builder;
/**
 * Class AbstractBuildXML
 * @package FB2Builder
 */
abstract class AbstractBuildXML implements InterfaceNodes
{

    /**
     * @param \DOMDocument $domDoc
     * @return \DOMElement|void
     */
    function buildXML(\DOMDocument $domDoc){

        if(empty($this->getXMLNodeName()))
            return false;
        $nodeName = $this->getXMLNodeName();

        $node = $domDoc->createElement($nodeName);
        $domDoc->appendChild($node);

        foreach($this as $name => $value) {

            if(is_object($value)) {
                $element = $value->buildXML($domDoc);
                $node->appendChild($domDoc->importNode($element, TRUE));
            } elseif((strpos($name, 'attr') !== 0)) {
                if(empty($value))
                    continue;
                $node->textContent = $value;
            }
        }
        return $node;
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


/*function buildXML(\DOMDocument $domDoc){
    $parent = isset($this->getXMLNodeName()['parent']) && !empty($this->getXMLNodeName()['parent']) ? $this->getXMLNodeName()['parent'] : FALSE;
    $property = isset($this->getXMLNodeName()['property']) && !empty($this->getXMLNodeName()['property']) ? $this->getXMLNodeName()['property'] : FALSE;
    $parentXML = NULL;
    $nodes = [];
    if($parent){
        $parentXML = $domDoc->createElement($parent);
        $domDoc->appendChild($parentXML);
        if(isset($this->parentAttr) && !empty($this->parentAttr)){
            foreach($this->parentAttr as $name => $value) {
                $parentXML->setAttribute($name, $value);
            }
        }
        //print_r($this->parentAttr);
    }

    foreach($this as $name => $value) {

        if(is_object($value)) {
            $result = $value->buildXML($domDoc);
            if($parent) {
                foreach ($result as $node) {
                    $parentXML->appendChild($domDoc->importNode($node, TRUE));
                }
            } else {
                $nodes[] = $result;
            }
        } elseif((strpos($name, 'parentAttr') !== 0) && (strpos($name, 'attr') !== 0)) {
            $xmlNodeName = is_array($property) && array_search($name,$property) ? array_search($name,$property) : $name;
            $element = NULL;
            if(!empty($value)) {
                if(is_array($value)) {

                    foreach($value as $item){
                        echo $xmlNodeName."\r\n";
                        $element = $domDoc->createElement($xmlNodeName,$item['value']);
                        if(isset($item['attr'])) {
                            foreach($item['attr'] as $attrName => $attrVal) {
                                $element->setAttribute($attrName, $attrVal);
                            }
                        }
                        $nodes[] = $element;
                    }
                } else {
                    $element = $domDoc->createElement($xmlNodeName,$value);
                    $attr = $this->getAttr();
                    if($attr) {
                        foreach($attr as $attrName => $attrVal) {
                            $element->setAttribute($attrName, $attrVal);
                        }
                    }
                    $nodes[] = $element;
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
}*/