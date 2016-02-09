<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 03.02.2016
 * Time: 17:08
 */
class FB2BuilderTitleInfo extends FB2BuilderAbstractNodes
{

    /**
     * @var FB2BuilderGenre
     */
    protected $genre = NULL;
    /**
     * @var FB2BuilderAuthor
     */
    protected $author = NULL;
    /**
     * @var FB2BuilderBookTitle
     */
    protected $bookTitle = NULL;
    /**
     * @var FB2BuilderAnnotation
     */
    protected $annotation = NULL;
    /**
     * @var FB2BuilderKeywords
     */
    protected $keywords = NULL;
    /**
     * @var FB2BuilderDate
     */
    protected $date = NULL;
    /**
     * @var FB2BuilderCoverpage
     */
    protected $coverpage = NULL;
    /**
     * @var FB2BuilderLang
     */
    protected $lang = NULL;
    /**
     * @var FB2BuilderSrcLang
     */
    protected $srcLang = NULL;
    /**
     * @var FB2BuilderTranslator
     */
    protected $translator = NULL;
    /**
     * @var FB2BuilderSequence
     */
    protected $sequence = NULL;

    /**
     * <genre> - 1..n (любое число, один обязaтелен);
     * <author> - 1..n (любое число, один обязaтелен);
     * <book-title> - 1 (один, обязателен);
     * <annotation> - 0..1 (один, опционально);
     * <keywords> - 0..1 (один, опционально);
     * <date> - 0..1 (один, опционально);
     * <coverpage> - 0..1 (один, опционально);
     * <lang> - 1 (один, обязателен);
     * <src-lang> - 0..1 (один, опционально);
     * <translator> - 0..n (любое число, опционально);
     * <sequence> - 0..n (любое число, опционально).
     */

    /**
     * @return FB2BuilderAuthor
     */
    public function getAuthor()
    {
        if(!$this->author instanceof FB2BuilderAuthor)
            return $this->author = new FB2BuilderAuthor();
        return $this->author;
    }

    /**
     * @return FB2BuilderGenre
     */
    public function getGenre()
    {
        if(!$this->genre instanceof FB2BuilderGenre)
            return $this->genre = new FB2BuilderGenre();
        return $this->genre;
    }


    /**
     * @return FB2BuilderAnnotation
     */
    public function getAnnotation()
    {
        if(!$this->annotation instanceof FB2BuilderAnnotation)
            return $this->annotation = new FB2BuilderAnnotation();
        return $this->annotation;
    }


    /**
     * @return FB2BuilderBookTitle
     */
    public function getBookTitle()
    {
        if(!$this->bookTitle instanceof FB2BuilderBookTitle)
            return $this->bookTitle = new FB2BuilderBookTitle();
        return $this->bookTitle;
    }


    /**
     * @return FB2BuilderKeywords
     */
    public function getKeywords()
    {
        if(!$this->keywords instanceof FB2BuilderKeywords)
            return $this->keywords = new FB2BuilderKeywords();
        return $this->keywords;
    }


    /**
     * @return FB2BuilderDate
     */
    public function getDate()
    {
        if(!$this->date instanceof FB2BuilderDate)
            return $this->date = new FB2BuilderDate();
        return $this->date;
    }


    /**
     * @return FB2BuilderLang
     */
    public function getLang()
    {
        if(!$this->lang instanceof FB2BuilderLang)
            return $this->lang = new FB2BuilderLang();
        return $this->lang;
    }


    /**
     * @return FB2BuilderSrcLang
     */
    public function getSrcLang()
    {
        if(!$this->srcLang instanceof FB2BuilderSrcLang)
            return $this->srcLang = new FB2BuilderSrcLang();
        return $this->srcLang;
    }


    /**
     * @return FB2BuilderTranslator
     */
    public function getTranslator()
    {
        if(!$this->translator instanceof FB2BuilderTranslator)
            return $this->translator = new FB2BuilderTranslator();
        return $this->translator;
    }


    /**
     * @return FB2BuilderCoverpage
     */
    public function getCoverpage()
    {
        if(!$this->coverpage instanceof FB2BuilderCoverpage)
            return $this->coverpage = new FB2BuilderCoverpage();
        return $this->coverpage;
    }


    /**
     * @return FB2BuilderSequence
     */
    public function getSequence()
    {
        if(!$this->sequence instanceof FB2BuilderSequence)
            return $this->sequence = new FB2BuilderSequence();
        return $this->sequence;
    }

    /*function buildXML()
    {
        $titleInfoXML = $domDoc->createElement('title-info');
        $authorXML = $this->getAuthor()->buildXML($domDoc);
        $titleInfoXML->appendChild($authorXML);
        return $titleInfoXML;
        // TODO: Implement getXML() method.
    }*/
    static public function getXMLNodesName()
    {
        return [
            'genre' => 'genre',
            'author' => 'author',
            'bookTitle' => 'book-title',
            'annotation' => 'annotation',
            'keywords' => 'keywords',
            'date' => 'date',
            'coverpage' => 'coverpage',
            'lang' => 'lang',
            'srcLang' => 'src-lang',
            'translator' => 'translator',
            'sequence' => 'sequence',
        ];

    }
}