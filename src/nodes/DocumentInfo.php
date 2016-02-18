<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 23:00
 */
namespace FB2Builder\nodes;
/**
 * Class DocumentInfo
 * @package FB2Builder\nodes
 */
class DocumentInfo extends AbstractBuildXML
{
    /**
     * @var Author
     */
    protected $author;
    /**
     * @var ProgramUsed
     */
    protected $programUsed;
    /**
     * @var Date
     */
    protected $date;
    /**
     * @var ScrUrl
     */
    protected $scrUrl;
    /**
     * @var ScrOcr
     */
    protected $scrOcr;
    /**
     * @var Id
     */
    protected $id;
    /**
     * @var Version
     */
    protected $version;
    /**
     * @var History
     */
    protected $history;
    /**
     * @var Publisher
     */
    protected $publisher;

    /**
     * <author> - 1..n (любое число, один обязaтелен);
     * <program-used> - 0..1 (один, опционально);
     * <date> - 1 (один, обязателен);
     * <src-url> - 0..n (любое число, опционально);
     * <src-ocr> - 0..1 (один, опционально);
     * <id> - 1 (один, обязателен);
     * <version> - 1 (один, обязателен);
     * <history> - 0..1 (один, опционально);
     * <publisher> - 0..n (любое число, опционально) с версии 2.2.
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
     * @return Date
     */
    public function getDate()
    {
        if(!$this->date instanceof Date)
            return $this->date = new Date();
        return $this->date;
    }


    /**
     * @return Id
     */
    public function getId()
    {
        if(!$this->id instanceof Id)
            return $this->id = new Id();
        return $this->id;
    }

    /**
     * @return ProgramUsed
     */
    public function getProgramUsed()
    {
        if(!$this->programUsed instanceof ProgramUsed)
            return $this->programUsed = new ProgramUsed();
        return $this->programUsed;
    }

    /**
     * TODO:
     * @return ScrUrl
     */
    public function getScrUrl()
    {
        if(!$this->scrUrl instanceof SrcUrl)
            return $this->scrUrl = new SrcUrl();
        return $this->scrUrl;
    }

    /**
     * TODO:
     * @return ScrOcr
     */
    public function getScrOcr()
    {
        return $this->scrOcr;
    }

    /**
     * @return Version
     */
    public function getVersion()
    {
        if(!$this->version instanceof Version)
            return $this->version = new Version();
        return $this->version;
    }

    /**
     * @return History
     */
    public function getHistory()
    {
        if(!$this->history instanceof History)
            return $this->history = new History();
        return $this->history;
    }

    /**
     * @return Publisher
     */
    public function getPublisher()
    {
        if(!$this->publisher instanceof Publisher)
            return $this->publisher = new Publisher();
        return $this->publisher;
    }

    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'document-info';
    }


}