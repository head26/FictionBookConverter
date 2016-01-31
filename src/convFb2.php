<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 29.01.2016
 * Time: 14:03
 */
class convFb2
{
    public function convert() {
        $domDoc = new \DOMDocument('1.0', 'UTF-8');
        header("Content-Type: text/plain");
        $fB = $domDoc->createElement('FictionBook');
        $fB->setAttribute('xmlns','http://www.gribuser.ru/xml/fictionbook/2.0');
        $fB->setAttribute('xmlns:xlink','http://www.w3.org/1999/xlink');
        $domDoc->appendChild($fB);
        $description = $domDoc->createElement('description');
        $fB->appendChild($description);

        echo $domDoc->saveXML();
    }
}
$a = new convFb2();
$a->convert();
?>