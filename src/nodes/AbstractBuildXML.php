<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 08.02.2016
 * Time: 13:58
 */
namespace FB2Builder\nodes;
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
     * @param \DOMDocument $domDoc
     * @return \DOMElement|void
     */
    function buildXML(\DOMDocument $domDoc){

        if(empty($this->getXMLNodeName()))
            return false;
        $nodeName = $this->getXMLNodeName();

        $node = $domDoc->createElementNS('http://www.gribuser.ru/xml/fictionbook/2.0',$nodeName);

        $domDoc->appendChild($node);
        if($nodeName == "FictionBook") {
            $node->setAttributeNS(
                'http://www.w3.org/2000/xmlns/',
                'xmlns:xlink',
                'http://www.w3.org/1999/xlink'
            );
        }

        if(!empty($this->attribute)) {
            $attribute = $this->attribute->get();
            foreach ($attribute as $name => $value)
                $node->setAttribute($name, $value);
        }
        foreach($this as $name => $value)
        {
            if($name == 'attribute')
                continue;
            if(in_array($nodeName, ['body','annotation']))
            {
                $parser = new htmlParser();
print_r($parser->parse($value));
                $node->appendChild($domDoc->importNode($parser->parse($value), TRUE));
                continue;
            }
            if(is_object($value))
            {
                $element = $value->buildXML($domDoc);
                $node->appendChild($domDoc->importNode($element, TRUE));
            } elseif(is_array($value))
            {
                foreach($value as $item)
                {
                    $element = $item->buildXML($domDoc);
                    $node->appendChild($domDoc->importNode($element, TRUE));
                }
            } else
            {
                if(empty($value))
                    continue;
                $node->textContent = $value;
            }
        }
        return $node;
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
