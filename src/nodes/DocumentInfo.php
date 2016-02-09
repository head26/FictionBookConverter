<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 23:00
 */
class FB2BuilderDocumentInfo extends FB2BuilderAbstractNodes
{
    protected $author = NULL;
    protected $programUsed = NULL;
    protected $date = NULL;
    protected $scrUrl = NULL;
    protected $scrOcr = NULL;
    protected $id = NULL;
    protected $version = NULL;
    protected $history = NULL;
    protected $publisher = NULL;


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
     * @return FB2BuilderDate|null
     */
    public function getDate()
    {
        if(!$this->date instanceof FB2BuilderDate)
            return $this->date = new FB2BuilderDate();
        return $this->date;
    }


    /**
     * @return FB2BuilderId|null
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