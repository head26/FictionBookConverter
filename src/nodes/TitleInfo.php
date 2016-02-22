<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 03.02.2016
 * Time: 17:08
 */
namespace FB2Builder\nodes;
/**
 * Class TitleInfo
 *
 * Описание информации о произведении (с учетом перевода, но без учета издания).
 * @package FB2Builder\nodes
 */
class TitleInfo extends AbstractBuildXML
{

    /**
     * @var array Genre
     */
    protected $genre = [];
    /**
     * @var array Author
     */
    protected $author = [];
    /**
     * @var BookTitle
     */
    protected $bookTitle;
    /**
     * @var Annotation
     */
    protected $annotation;
    /**
     * @var Keywords
     */
    protected $keywords;
    /**
     * @var Date
     */
    protected $date;
    /**
     * @var Coverpage
     */
    protected $coverpage;
    /**
     * @var Lang
     */
    protected $lang;
    /**
     * @var SrcLang
     */
    protected $srcLang;
    /**
     * @var array Translator
     */
    protected $translator = [];
    /**
     * @var array Sequence
     */
    protected $sequence = [];

    /**
     * author - 1..n (любое число, один обязaтелен);
     * @param $id
     * @return Author
     */
    public function getAuthor($id)
    {
        if(isset($this->author[$id]))
            return $this->author[$id];
        else
            return $this->author[$id] = new Author();
    }

    /**
     * genre - 1..n (любое число, один обязaтелен);
     * @param $id
     * @return Genre
     */
    public function getGenre($id)
    {
        if(isset($this->genre[$id]))
            return $this->genre[$id];
        else
            return $this->genre[$id] = new Genre();
    }


    /**
     * annotation - 0..1 (один, опционально);
     * @return Annotation
     */
    public function getAnnotation()
    {
        if(!$this->annotation instanceof Annotation)
            return $this->annotation = new Annotation();
        return $this->annotation;
    }


    /**
     * book-title - 1 (один, обязателен);
     * @return BookTitle
     */
    public function getBookTitle()
    {
        if(!$this->bookTitle instanceof BookTitle)
            return $this->bookTitle = new BookTitle();
        return $this->bookTitle;
    }


    /**
     * keywords - 0..1 (один, опционально);
     * @return Keywords
     */
    public function getKeywords()
    {
        if(!$this->keywords instanceof Keywords)
            return $this->keywords = new Keywords();
        return $this->keywords;
    }


    /**
     * date - 0..1 (один, опционально);
     * @return Date
     */
    public function getDate()
    {
        if(!$this->date instanceof Date)
            return $this->date = new Date();
        return $this->date;
    }


    /**
     * lang - 1 (один, обязателен);
     * @return Lang
     */
    public function getLang()
    {
        if(!$this->lang instanceof Lang)
            return $this->lang = new Lang();
        return $this->lang;
    }


    /**
     * src-lang - 0..1 (один, опционально);
     * @return SrcLang
     */
    public function getSrcLang()
    {
        if(!$this->srcLang instanceof SrcLang)
            return $this->srcLang = new SrcLang();
        return $this->srcLang;
    }


    /**
     * translator - 0..n (любое число, опционально);
     * @param $id
     * @return Translator
     */
    public function getTranslator($id)
    {
        if(isset($this->translator[$id]))
            return $this->translator[$id];
        else
            return $this->translator[$id] = new Translator();
    }


    /**
     * coverpage - 0..1 (один, опционально);
     * @return Coverpage
     */
    public function getCoverpage()
    {
        if(!$this->coverpage instanceof Coverpage)
            return $this->coverpage = new Coverpage();
        return $this->coverpage;
    }


    /**
     * sequence - 0..n (любое число, опционально).
     * @param $id
     * @return Sequence
     */
    public function getSequence($id)
    {
        if(isset($this->sequence[$id]))
            return $this->sequence[$id];
        else
            return $this->sequence[$id] = new Sequence();
    }

    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'title-info';

    }
}