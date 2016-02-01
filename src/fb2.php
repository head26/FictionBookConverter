<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 29.01.2016
 * Time: 16:08
 */
class fb2
{
    private $domDoc;

    public function __construct()
    {
        $this->domDoc = new DOMDocument();
        $this->domDoc->load("./templateFb2.xml");
    }


    public function addGenre ($genres = ['unrecognised']) {
        $titleInfo = $this->domDoc->getElementsByTagName('title-info');
        foreach($genres as $key => $genre) {
            $titleInfo->item(0)->appendChild($this->domDoc->createElement('genre', $genre));
        }
    }
    public function addBody ($body) {
        $docBody = $this->domDoc->getElementsByTagName('body');
        $docBody->item(0)->textContent = $body;
    }
    public function addBookTitle ($bookTitle) {
        $titleInfo = $this->domDoc->getElementsByTagName('title-info');
        $titleInfo->item(0)->appendChild($this->domDoc->createElement('book-title', $bookTitle));
    }
    public function buildFb2(){
      //  if(!$this->domDoc->schemaValidate('./schema/XSD/fb2.2/FictionBook.xsd'))
      //      echo 'error';'
        $this->domDoc->normalizeDocument();
        echo $this->domDoc->saveXML();
    }
}
/*$a = new fb2();
$a->buildFb2();*/
