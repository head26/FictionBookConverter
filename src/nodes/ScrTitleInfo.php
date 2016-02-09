<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 23:06
 */
class FB2BuilderScrTitleInfo extends FB2BuilderAbstractNodes
{
    protected $genre = NULL;
    protected $author = NULL;
    protected $bookTitle = NULL;
    protected $annotation = NULL;
    protected $keywords = NULL;
    protected $date = NULL;
    protected $coverpage = NULL;
    protected $lang = NULL;
    protected $srcLang = NULL;
    protected $translator = NULL;
    protected $sequence = NULL;

    static public function getXMLNodesName()
    {
        // TODO: Implement getXMLNodesName() method.
    }


}