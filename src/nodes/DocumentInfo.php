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
 *
 * Описание информации о конкретном FB2.x документе (создатель(и), история и т.д.).
 * @package FB2Builder\nodes
 */
class DocumentInfo extends AbstractBuildXML
{
    /**
     * @var array Author
     */
    protected $author = [];
    /**
     * @var ProgramUsed
     */
    protected $programUsed;
    /**
     * @var Date
     */
    protected $date;
    /**
     * @var array SrcUrl
     */
    protected $scrUrl = [];
    /**
     * @var SrcOcr
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
     * @var array Publisher
     */
    protected $publisher = [];

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
     * date - 1 (один, обязателен);
     * @return Date
     */
    public function getDate()
    {
        if(!$this->date instanceof Date)
            return $this->date = new Date();
        return $this->date;
    }


    /**
     * id - 1 (один, обязателен);
     * @return Id
     */
    public function getId()
    {
        if(!$this->id instanceof Id)
            return $this->id = new Id();
        return $this->id;
    }

    /**
     * program-used - 0..1 (один, опционально);
     * @return ProgramUsed
     */
    public function getProgramUsed()
    {
        if(!$this->programUsed instanceof ProgramUsed)
            return $this->programUsed = new ProgramUsed();
        return $this->programUsed;
    }

    /**
     * src-url - 0..n (любое число, опционально);
     * @param $id
     * @return SrcUrl
     */
    public function getScrUrl($id)
    {
        if(isset($this->scrUrl[$id]))
            return $this->scrUrl[$id];
        else
            return $this->scrUrl[$id] = new SrcUrl();
    }

    /**
     * src-ocr - 0..1 (один, опционально);
     * @return SrcOcr
     */
    public function getScrOcr()
    {
        if(!$this->scrOcr instanceof SrcOcr)
            return $this->scrOcr = new SrcOcr();
        return $this->scrOcr;
    }

    /**
     * version - 1 (один, обязателен);
     * @return Version
     */
    public function getVersion()
    {
        if(!$this->version instanceof Version)
            return $this->version = new Version();
        return $this->version;
    }

    /**
     * history - 0..1 (один, опционально);
     * @return History
     */
    public function getHistory()
    {
        if(!$this->history instanceof History)
            return $this->history = new History();
        return $this->history;
    }

    /**
     * publisher - 0..n (любое число, опционально) с версии 2.2.
     * @param $id
     * @return Publisher
     */
    public function getPublisher($id)
    {
        if(isset($this->publisher[$id]))
            return $this->publisher[$id];
        else
            return $this->publisher[$id] = new Publisher();
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