<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 23:00
 */
class FB2BuilderDocumentInfo extends FB2BuilderAbstractNodes
{
    /**
     * @var FB2BuilderAuthor
     */
    protected $author = NULL;
    /**
     * @var FB2BuilderProgramUsed
     */
    protected $programUsed = NULL;
    /**
     * @var FB2BuilderDate
     */
    protected $date = NULL;
    /**
     * @var FB2BuilderScrUrl
     */
    protected $scrUrl = NULL;
    /**
     * @var FB2BuilderScrOcr
     */
    protected $scrOcr = NULL;
    /**
     * @var FB2BuilderId
     */
    protected $id = NULL;
    /**
     * @var FB2BuilderVersion
     */
    protected $version = NULL;
    /**
     * @var FB2BuilderHistory
     */
    protected $history = NULL;
    /**
     * @var FB2BuilderPublisher
     */
    protected $publisher = NULL;

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
     * @return FB2BuilderAuthor
     */
    public function getAuthor()
    {
        if(!$this->author instanceof FB2BuilderAuthor)
            return $this->author = new FB2BuilderAuthor();
        return $this->author;
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
     * @return FB2BuilderId
     */
    public function getId()
    {
        if(!$this->id instanceof FB2BuilderId)
            return $this->id = new FB2BuilderId();
        return $this->id;
    }

    static public function getXMLNodesName()
    {
        // TODO: Implement getXMLNodesName() method.
    }


}