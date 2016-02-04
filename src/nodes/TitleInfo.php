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
     * @return FB2BuilderAuthor|null
     */
    public function getAuthor()
    {
        if(!$this->author instanceof FB2BuilderAuthor)
            return $this->author = new FB2BuilderAuthor();
        return $this->author;
    }

    /**
     * @return FB2BuilderGenre|null
     */
    public function getGenre()
    {
        if(!$this->genre instanceof FB2BuilderGenre)
            return $this->genre = new FB2BuilderGenre();
        return $this->genre;
    }


    /**
     * @return FB2BuilderAnnotation|null
     */
    public function getAnnotation()
    {
        if(!$this->annotation instanceof FB2BuilderAnnotation)
            return $this->annotation = new FB2BuilderAnnotation();
        return $this->annotation;
    }


    /**
     * @return FB2BuilderBookTitle|null
     */
    public function getBookTitle()
    {
        if(!$this->bookTitle instanceof FB2BuilderBookTitle)
            return $this->bookTitle = new FB2BuilderBookTitle();
        return $this->bookTitle;
    }


    /**
     * @return FB2BuilderKeywords|null
     */
    public function getKeywords()
    {
        if(!$this->keywords instanceof FB2BuilderKeywords)
            return $this->keywords = new FB2BuilderKeywords();
        return $this->keywords;
    }


    /**
     * @return FB2BuilderDate|null
     */
    public function getDate()
    {
        if(!$this->date instanceof FB2BuilderDate)
            return $this->date = new FB2BuilderDate();
        return $this->date;
    }


    /**
     * @return FB2BuilderLang|null
     */
    public function getLang()
    {
        if(!$this->lang instanceof FB2BuilderLang)
            return $this->lang = new FB2BuilderLang();
        return $this->lang;
    }


}