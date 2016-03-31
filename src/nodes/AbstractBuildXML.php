<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 08.02.2016
 * Time: 13:58
 */
namespace FB2Builder\nodes;

use FB2Builder\FB2Builder;

/**
 * Class AbstractBuildXML
 * @package FB2Builder\nodes
 */
abstract class AbstractBuildXML implements InterfaceNode
{
    /**
     * @var Attribute
     */
    protected $attribute;
    
    /**
     * Build XML
     * @param \DOMNode|null $parentNode
     * @return void|false
     */
    function buildXML($parentNode = null){

        if(empty($this->getXMLNodeName()))
            return false;

        $FB2DOM = FB2Builder::$FB2DOM;

        $nodeName = $this->getXMLNodeName();

        $node = $FB2DOM->createElementNS('http://www.gribuser.ru/xml/fictionbook/2.0',$nodeName);
        if($nodeName == "FictionBook") {
            $node->setAttributeNS(
                'http://www.w3.org/2000/xmlns/',
                'xmlns:xlink',
                'http://www.w3.org/1999/xlink'
            );
            $FB2DOM->appendChild($FB2DOM->importNode($node, TRUE));
        }

        if(!empty($parentNode))
            $parentNode->appendChild($node);
        if(!empty($this->attribute)) {
            $attribute = $this->attribute->get();
            foreach ($attribute as $name => $value) {
                if($nodeName == 'image')
                    $node->setAttributeNS('http://www.w3.org/1999/xlink','xlink:href', $value);
                else
                    $node->setAttribute($name, $value);
            }
        }

        foreach($this as $name => $value)
        {

            if($name == 'attribute')
                continue;

            if(is_object($value))
                $value->buildXML($node);
            elseif(is_array($value)) {
                foreach ($value as $item)
                    $item->buildXML($node);
            }
            else {
                if (empty($value))
                    continue;
                $node->textContent = $value;
            }
        }
        if(!empty(FictionBook::$binary) && $nodeName == "FictionBook") {
            foreach (FictionBook::$binary as $key => $val)
                $val->buildXML($node);
        }
    }
    /**
     * @return Attribute
     */
    public function getAttribute()
    {
        if(!$this->attribute instanceof Attribute)
            return $this->attribute = new Attribute();
        return $this->attribute;
    }
}
