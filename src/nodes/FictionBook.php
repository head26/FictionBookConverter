<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 15:59
 */
namespace FB2Builder;

class FictionBook extends AbstractBuildXML
{
    /**
     * @var Description
     */
    protected $description = NULL;
    /**
     * @var Body
     */
    protected $body = NULL;
    /**
     * @var StyleSheet
     */
    protected $stylesheet = NULL;
    /**
     * @var Binary
     */
    protected $binary = NULL;

    protected $parentAttr = [];


    /**
     * FictionBook constructor.
     * @param string $xmlns
     * @param string $xlink
     */
    public function __construct($xmlns = NULL, $xlink = NULL)
    {
            $this->parentAttr['xmlns'] = empty($xmlns) ? "http://www.gribuser.ru/xml/fictionbook/2.0" : $xmlns;
            $this->parentAttr['xmlns:xlink'] = empty($xlink) ? "http://www.w3.org/1999/xlink" : $xlink;
    }
    /**
     * <stylesheet> - 0..n (любое число, опционально);
     * <description> - 1 (один, обязателен);
     * <body> - 1..n (любое число, один обязaтелен);
     * <binary> - 0..n (любое число, опционально).
     */

    /**
     * @return Description
     */
    public function getDescription()
    {
        if(!$this->description instanceof Description)
            return $this->description = new Description();
        return $this->description;
    }



   /* public function getBody()
    {
        if(!$this->body instanceof )
            return $this->body = new ();
        return $this->body;
    }*/


    /*function buildXML()
    {
        $fb = $domDoc->createElementNS('http://www.gribuser.ru/xml/fictionbook/2.0','FictionBook');
        $fb->setAttributeNS(
                            'http://www.w3.org/2000/xmlns/',
                            'xmlns:xlink',
                            'http://www.w3.org/1999/xlink'
            );
        $domDoc->appendChild($fb);

        $fb->appendChild($this->getDescription()->buildXML($domDoc));
        // TODO: Implement getXML() method.
    }*/
    static public function getXMLNodeName()
    {
        return [
            'parent' => 'FictionBook'
        ];
    }
}
/*<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<FictionBook xmlns=\"http://www.gribuser.ru/xml/fictionbook/2.0\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
    <description>
        <title-info/>
        <document-info/>
    </description>
    <body/>
</FictionBook>
*/