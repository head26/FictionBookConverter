<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 03.02.2016
 * Time: 13:55
 */


class FB2BuilderDescription extends FB2BuilderAbstractNodes
{
    /**
     * @var FB2BuilderTitleInfo
     */
    protected $titleInfo = NULL;
    /**
     * @var FB2BuilderScrTitleInfo
     */
    protected $srcTitleInfo  = NULL;
    /**
     * @var FB2BuilderDocumentInfo
     */
    protected $documentInfo  = NULL;
    /**
     * @var FB2BuilderPublishInfo
     */
    protected $publishInfo  = NULL;
    /**
     * @var FB2BuilderCustomInfo
     */
    protected $customInfo  = NULL;
    /**
     * @var FB2BuilderOutput
     */
    protected $output  = NULL;

    /**
     * <title-info> - 1 (один, обязателен);
     * <src-title-info> - 0..1 (один, опционально) с версии 2.1;
     * <document-info> - 1 (один, обязателен);
     * <publish-info> - 0..1 (один, опционально);
     * <custom-info> - 0..n (любое число, опционально);
     * <output> - 0..2 (опционально один или два) с версии 2.1.
     */


    /**
     * @return FB2BuilderTitleInfo
     */
    public function getTitleInfo() {
        if(!$this->titleInfo instanceof FB2BuilderTitleInfo)
            return $this->titleInfo = new FB2BuilderTitleInfo();
        return $this->titleInfo;
    }


    /**
     * @return FB2BuilderScrTitleInfo
     */
    public function getSrcTitleInfo()
    {
        if(!$this->srcTitleInfo instanceof FB2BuilderScrTitleInfo)
            return $this->srcTitleInfo = new FB2BuilderScrTitleInfo();
        return $this->srcTitleInfo;
    }


    /**
     * @return FB2BuilderPublishInfo
     */
    public function getPublishInfo()
    {
        if(!$this->publishInfo instanceof FB2BuilderPublishInfo)
            return $this->publishInfo = new FB2BuilderPublishInfo();
        return $this->publishInfo;
    }


    /**
     * @return FB2BuilderOutput
     */
    public function getOutput()
    {
        if(!$this->output instanceof FB2BuilderOutput)
            return $this->output = new FB2BuilderOutput()
                ;
        return $this->output;
    }


    /**
     * @return FB2BuilderDocumentInfo
     */
    public function getDocumentInfo()
    {
        if(!$this->documentInfo instanceof FB2BuilderDocumentInfo)
            return $this->documentInfo = new FB2BuilderDocumentInfo();
        return $this->documentInfo;
    }


    /*function buildXML()
    {
        $descriptionXML = $domDoc->createElement('description');
        $titleInfoXML = $this->getTitleInfo()->buildXML($domDoc);
        $descriptionXML->appendChild($titleInfoXML);
        return $descriptionXML;
        // TODO: Implement getXML() method.
    }*/
    static public function getXMLNodesName()
    {
        return [
            'titleInfo' => 'title-info',
            'srcTitleInfo' => 'src-title-info',
            'documentInfo' => 'document-info',
            'publishInfo' => 'publish-info',
            'customInfo' => 'custom-info',
        ];
    }
}