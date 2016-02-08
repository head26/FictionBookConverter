<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 03.02.2016
 * Time: 13:55
 */


class FB2BuilderDescription extends FB2BuilderAbstractNodes
{
    protected $titleInfo = NULL;
    protected $srcTitleInfo  = NULL;
    protected $documentInfo  = NULL;
    protected $publishInfo  = NULL;
    protected $customInfo  = NULL;
    protected $output  = NULL;

    /**
     * @return FB2BuilderTitleInfo|null
     */
    public function getTitleInfo() {
        if(!$this->titleInfo instanceof FB2BuilderTitleInfo)
            return $this->titleInfo = new FB2BuilderTitleInfo();
        return $this->titleInfo;
    }


    /**
     * @return FB2BuilderScrTitleInfo|null
     */
    public function getSrcTitleInfo()
    {
        if(!$this->srcTitleInfo instanceof FB2BuilderScrTitleInfo)
            return $this->srcTitleInfo = new FB2BuilderScrTitleInfo();
        return $this->srcTitleInfo;
    }


    /**
     * @return FB2BuilderPublishInfo|null
     */
    public function getPublishInfo()
    {
        if(!$this->publishInfo instanceof FB2BuilderPublishInfo)
            return $this->publishInfo = new FB2BuilderPublishInfo();
        return $this->publishInfo;
    }


    /**
     * @return FB2BuilderOutput|null
     */
    public function getOutput()
    {
        if(!$this->output instanceof FB2BuilderOutput)
            return $this->output = new FB2BuilderOutput()
                ;
        return $this->output;
    }


    /**
     * @return FB2BuilderDocumentInfo|null
     */
    public function getDocumentInfo()
    {
        if(!$this->documentInfo instanceof FB2BuilderDocumentInfo)
            return $this->documentInfo = new FB2BuilderDocumentInfo();
        return $this->documentInfo;
    }

    function getXML(DOMDocument $xml)
    {
        // TODO: Implement getXML() method.
    }
}