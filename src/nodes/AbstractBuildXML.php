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
