<?php
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 01.03.2016
 * Time: 14:40
 */

namespace FB2Builder\nodes;


class htmlParser
{
    protected $clean = [
    ];
    public function parse($text = '')
    {
        //print_r($value);
        $text = trim(str_replace(array('\n','&nbsp;'), '', $text));
       // echo $text;
        $doc = new \DOMDocument("1.0", "UTF-8");
        $doc->loadHTML(mb_convert_encoding($text, 'HTML-ENTITIES', 'utf-8'), LIBXML_DTDATTR);
        //print_r($doc);
        $xpath = new \DOMXpath($doc);
        $elements = $xpath->query("//p");
        //print_r($elements);
        foreach ($elements as $element) {
          $node =  $doc->createElementNS('http://www.gribuser.ru/xml/fictionbook/2.0', $element->nodeName,trim($element->nodeValue));
        }
        return $node;
        /*$txt =~ s/&(?!#)(?:([a-zA-Z]+);)?/$1 ? $html_entities{$1} : "&amp;"/sge;
        $txt =~ s/[<>]/$angbr{$1}/sg unless $_[0];*/
    }
}