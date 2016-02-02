<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 29.01.2016
 * Time: 16:08
 */
class fb2
{
    protected $domDoc;

    public function __construct()
    {
        $this->domDoc = new DOMDocument();
        $this->domDoc->preserveWhiteSpace = false;
        $this->domDoc->formatOutput = true;
        $this->domDoc->loadXML("<?xml version=\"1.0\" encoding=\"UTF-8\"?>
                                <FictionBook xmlns=\"http://www.gribuser.ru/xml/fictionbook/2.0\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                                    <description>
                                        <title-info/>
                                        <document-info/>
                                    </description>
                                    <body/>
                                </FictionBook>");
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
