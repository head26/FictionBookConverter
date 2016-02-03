<?php

class Fb2Doc {
    private $page = NULL;
    private $page_title = NULL;
    private $page_heading = NULL;
    private $page_text = NULL;
    private $genres = [];
    private $bookTitle = '';
    function __construct() {
    }
    function showPage() {
        return $this->page;
    }
    function setTitle($title_in) {
        $this->page_title = $title_in;
    }
    function setHeading($heading_in) {
        $this->page_heading = $heading_in;
    }
    function setText($text_in) {
        $this->page_text .= $text_in;
    }
    function setGenre($genres = ['unrecognised']) {
        if(!empty($genres) && is_array($genres)) {
            $this->genres = array_merge($this->genres,$genres);
            $this->genres = array_unique($this->genres);
        }
    }
    function setBookTitle($bookTitle) {
        $this->bookTitle = trim($bookTitle);
    }

    function formatPage() {
        $this->page  = '<html>';
        $this->page .= '<head><title>'.$this->page_title.'</title></head>';
        $this->page .= '<body>';
        $this->page .= '<h1>'.$this->page_heading.'</h1>';
        $this->page .= $this->page_text;
        $this->page .= '</body>';
        $this->page .= '</html>';
    }
    function saveFb2() {
        $fb2 = new DOMDocument();
        $fb2->preserveWhiteSpace = false;
        $fb2->formatOutput = true;
        $fb2->loadXML("<?xml version=\"1.0\" encoding=\"UTF-8\"?>
                                <FictionBook xmlns=\"http://www.gribuser.ru/xml/fictionbook/2.0\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                                    <description>
                                        <title-info/>
                                        <document-info/>
                                    </description>
                                    <body/>
                                </FictionBook>");
        $titleInfo = $fb2->getElementsByTagName('title-info');
        foreach($this->genres as $key => $genre) {
            $titleInfo->item(0)->appendChild($fb2->createElement('genre', $genre));
        }
        $titleInfo = $fb2->getElementsByTagName('title-info');
        $titleInfo->item(0)->appendChild($fb2->createElement('book-title', $this->bookTitle));
    }
}

class Fb2DocBuilder {
    private $page = NULL;
    function __construct() {
        $this->page = new Fb2Doc();
    }
    function setTitle($title_in) {
        $this->page->setTitle($title_in);
    }
    function setHeading($heading_in) {
        $this->page->setHeading($heading_in);
    }
    function setText($text_in) {
        $this->page->setText($text_in);
    }
    function setGenre($genres) {
        $this->page->setGenre($genres);
    }
    function setBookTitle($bookTitle) {
        $this->page->setBookTitle($bookTitle);
    }
    function saveFb2() {
        $this->page->saveFb2();
    }
    function formatPage() {
        $this->page->formatPage();
    }
    function getPage() {
        return $this->page;
    }
}

$fb2 = new Fb2DocBuilder();
$fb2->setText('test');
$fb2->formatPage();

print $fb2->getPage()->showPage();
