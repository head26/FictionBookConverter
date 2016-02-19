<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 03.02.2016
 * Time: 13:55
 */

namespace FB2Builder\nodes;
/**
 * Class Description
 * @package FB2Builder\nodes
 */
class Description extends AbstractBuildXML
{
    /**
     * <title-info> - 1 (один, обязателен);
     * @var TitleInfo
     */
    protected $titleInfo;
    /**
     * <src-title-info> - 0..1 (один, опционально) с версии 2.1;
     * @var SrcTitleInfo
     */
    protected $srcTitleInfo;
    /**
     * <document-info> - 1 (один, обязателен);
     * @var DocumentInfo
     */
    protected $documentInfo;
    /**
     * <publish-info> - 0..1 (один, опционально);
     * @var PublishInfo
     */
    protected $publishInfo;
    /**
     * <custom-info> - 0..n (любое число, опционально);
     * @var CustomInfo
     */
    protected $customInfo;
    /**
     * <output> - 0..2 (опционально один или два) с версии 2.1.
     * @var Output
     */
    protected $output;

    /**
     * @return TitleInfo
     */
    public function getTitleInfo()
    {
        if(!$this->titleInfo instanceof TitleInfo)
            return $this->titleInfo = new TitleInfo();
        return $this->titleInfo;
    }


    /**
     * @return SrcTitleInfo
     */
    public function getSrcTitleInfo()
    {
        if(!$this->srcTitleInfo instanceof SrcTitleInfo)
            return $this->srcTitleInfo = new SrcTitleInfo();
        return $this->srcTitleInfo;
    }


    /**
     * @return PublishInfo
     */
    public function getPublishInfo()
    {
        if(!$this->publishInfo instanceof PublishInfo)
            return $this->publishInfo = new PublishInfo();
        return $this->publishInfo;
    }


    /**
     * @return Output
     */
    public function getOutput()
    {
        if(!$this->output instanceof Output)
            return $this->output = new Output()
                ;
        return $this->output;
    }


    /**
     * @return DocumentInfo
     */
    public function getDocumentInfo()
    {
        if(!$this->documentInfo instanceof DocumentInfo)
            return $this->documentInfo = new DocumentInfo();
        return $this->documentInfo;
    }

    /**
     * @return CustomInfo
     */
    public function getCustomInfo()
    {
        if(!$this->customInfo instanceof CustomInfo)
            return $this->customInfo = new CustomInfo();
        return $this->customInfo;
    }


    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'description';
    }
}