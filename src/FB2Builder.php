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
     * @var \DOMDocument
     */
    public static $FB2DOM;

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
            self::$FB2DOM = new \DOMDocument("1.0", "UTF-8");
            self::$FB2DOM->preserveWhiteSpace = FALSE;
            self::$FB2DOM->formatOutput = TRUE;
            $this->fictionBook->buildXML();
            self::$FB2DOM->schemaValidate("./XSD/FB2.2/FictionBook.xsd");
            //$domDoc->schemaValidate("./XSD/FB2.0/FictionBook2.xsd");
            self::$FB2DOM->save($path);
            echo self::$FB2DOM->saveXML();
        }
    }

}


