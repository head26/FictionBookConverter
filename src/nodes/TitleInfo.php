<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 03.02.2016
 * Time: 17:08
 */
class FB2BuilderTitleInfo
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

    /**
     * @return string
     */
    public function getA() {
        return $this->a;
    }
}