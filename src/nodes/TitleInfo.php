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
 * @package FB2Builder\nodes
 */
class TitleInfo extends AbstractBuildXML
{

    /**
     * <genre> - 1..n (любое число, один обязaтелен);
     * @var array Genre
     */
    protected $genre = [];
    /**
     * <author> - 1..n (любое число, один обязaтелен);
     * @var Author
     */
    protected $author = [];
    /**
     * <book-title> - 1 (один, обязателен);
     * @var BookTitle
     */
    protected $bookTitle;
    /**
     * <annotation> - 0..1 (один, опционально);
     * @var Annotation
     */
    protected $annotation;
    /**
     * <keywords> - 0..1 (один, опционально);
     * @var Keywords
     */
    protected $keywords;
    /**
     * <date> - 0..1 (один, опционально);
     * @var Date
     */
    protected $date;
    /**
     * <coverpage> - 0..1 (один, опционально);
     * @var Coverpage
     */
    protected $coverpage;
    /**
     * <lang> - 1 (один, обязателен);
     * @var Lang
     */
    protected $lang;
    /**
     * <src-lang> - 0..1 (один, опционально);
     * @var SrcLang
     */
    protected $srcLang;
    /**
     * <translator> - 0..n (любое число, опционально);
     * @var Translator
     */
    protected $translator;
    /**
     * <sequence> - 0..n (любое число, опционально).
     * @var Sequence
     */
    protected $sequence;

    /**
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
     * @return Annotation
     */
    public function getAnnotation()
    {
        if(!$this->annotation instanceof Annotation)
            return $this->annotation = new Annotation();
        return $this->annotation;
    }


    /**
     * @return BookTitle
     */
    public function getBookTitle()
    {
        if(!$this->bookTitle instanceof BookTitle)
            return $this->bookTitle = new BookTitle();
        return $this->bookTitle;
    }


    /**
     * @return Keywords
     */
    public function getKeywords()
    {
        if(!$this->keywords instanceof Keywords)
            return $this->keywords = new Keywords();
        return $this->keywords;
    }


    /**
     * @return Date
     */
    public function getDate()
    {
        if(!$this->date instanceof Date)
            return $this->date = new Date();
        return $this->date;
    }


    /**
     * @return Lang
     */
    public function getLang()
    {
        if(!$this->lang instanceof Lang)
            return $this->lang = new Lang();
        return $this->lang;
    }


    /**
     * @return SrcLang
     */
    public function getSrcLang()
    {
        if(!$this->srcLang instanceof SrcLang)
            return $this->srcLang = new SrcLang();
        return $this->srcLang;
    }


    /**
     * @return Translator
     */
    public function getTranslator()
    {
        if(!$this->translator instanceof Translator)
            return $this->translator = new Translator();
        return $this->translator;
    }


    /**
     * @return Coverpage
     */
    public function getCoverpage()
    {
        if(!$this->coverpage instanceof Coverpage)
            return $this->coverpage = new Coverpage();
        return $this->coverpage;
    }


    /**
     * @return Sequence
     */
    public function getSequence()
    {
        if(!$this->sequence instanceof Sequence)
            return $this->sequence = new Sequence();
        return $this->sequence;
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