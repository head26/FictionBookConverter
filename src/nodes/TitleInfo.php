<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 03.02.2016
 * Time: 17:08
 */
namespace FB2Builder;
/**
 * Class TitleInfo
 * @package FB2Builder
 */
class TitleInfo extends AbstractBuildXML
{

    /**
     * @var Genre
     */
    protected $genre = NULL;
    /**
     * @var Author
     */
    protected $author = NULL;
    /**
     * @var BookTitle
     */
    protected $bookTitle = NULL;
    /**
     * @var Annotation
     */
    protected $annotation = NULL;
    /**
     * @var Keywords
     */
    protected $keywords = NULL;
    /**
     * @var Date
     */
    protected $date = NULL;
    /**
     * @var Coverpage
     */
    protected $coverpage = NULL;
    /**
     * @var Lang
     */
    protected $lang = NULL;
    /**
     * @var SrcLang
     */
    protected $srcLang = NULL;
    /**
     * @var Translator
     */
    protected $translator = NULL;
    /**
     * @var Sequence
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
     * @return Author
     */
    public function getAuthor()
    {
        if(!$this->author instanceof Author)
            return $this->author = new Author();
        return $this->author;
    }

    /**
     * @return Genre
     */
    public function getGenre()
    {
        if(!$this->genre instanceof Genre)
            return $this->genre = new Genre();
        return $this->genre;
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