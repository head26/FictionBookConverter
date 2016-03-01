<?php
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 03.02.2016
 * Time: 13:54
 */

namespace FB2Builder;
use FB2Builder\nodes\FictionBook;
/**
 * Class FB2Builder
 * @package FB2Builder
 */
class FB2Builder
{
    /**
     * @var FictionBook
     */
    protected $fictionBook;


    /**
     * @return FictionBook
     */
    public function getFictionBook()
    {
        if(!$this->fictionBook instanceof FictionBook)
            return $this->fictionBook = new FictionBook();
        return $this->fictionBook;
    }


    /**
     * Save FB2 file
     * @param string $path
     */
    public function save($path = '') {
        if($this->fictionBook instanceof FictionBook)
        {
            $domDoc = new \DOMDocument("1.0", "UTF-8");
            $domDoc->preserveWhiteSpace = FALSE;
            $domDoc->formatOutput = TRUE;
            $this->fictionBook->buildXML($domDoc);
            //$domDoc->schemaValidate("./XSD/FB2.2/FictionBook.xsd");
            //$domDoc->schemaValidate("./XSD/FB2.0/FictionBook2.xsd");
            $domDoc->save($path);
            echo $domDoc->saveXML();
        }
    }

}


