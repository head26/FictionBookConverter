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
 *
 * Метаинформация о книге (автор(ы), название, выходные данные, ...) и файле (создатель(и), история, ссылки на источник, ...)
 * Используется в основном библиотечным софтом, но может представлять интерес и рядовому читателю.
 * Рекомендуется серьезно отнесится к заполнению,
 * поскольку неправильно (или неполно) заполненное описание приводит к некорректному позиционированию книги в библиотеке,
 * что затрудняет ее поиск, приводит к появлению "двойников" авторов и просто не позволяет потенциальному читателю составить предварительное мнение о книге.
 * @package FB2Builder\nodes
 */
class Description extends AbstractBuildXML
{
    /**
     * @var TitleInfo
     */
    protected $titleInfo;
    /**
     * @var SrcTitleInfo
     */
    protected $srcTitleInfo;
    /**
     * @var DocumentInfo
     */
    protected $documentInfo;
    /**
     * @var PublishInfo
     */
    protected $publishInfo;
    /**
     * @var array CustomInfo
     */
    protected $customInfo = [];
    /**
     * @var array Output
     */
    protected $output = [];

    /**
     * title-info - 1 (один, обязателен);
     * @return TitleInfo
     */
    public function getTitleInfo()
    {
        if(!$this->titleInfo instanceof TitleInfo)
            return $this->titleInfo = new TitleInfo();
        return $this->titleInfo;
    }


    /**
     * src-title-info - 0..1 (один, опционально) с версии 2.1;
     * @return SrcTitleInfo
     */
    public function getSrcTitleInfo()
    {
        if(!$this->srcTitleInfo instanceof SrcTitleInfo)
            return $this->srcTitleInfo = new SrcTitleInfo();
        return $this->srcTitleInfo;
    }


    /**
     * publish-info - 0..1 (один, опционально);
     * @return PublishInfo
     */
    public function getPublishInfo()
    {
        if(!$this->publishInfo instanceof PublishInfo)
            return $this->publishInfo = new PublishInfo();
        return $this->publishInfo;
    }


    /**
     * output - 0..2 (опционально один или два) с версии 2.1.
     * @param $id
     * @return Output
     */
    public function getOutput($id)
    {
        if(isset($this->output[$id]))
            return $this->output[$id];
        else
            return $this->output[$id] = new Output();
    }


    /**
     * document-info - 1 (один, обязателен);
     * @return DocumentInfo
     */
    public function getDocumentInfo()
    {
        if(!$this->documentInfo instanceof DocumentInfo)
            return $this->documentInfo = new DocumentInfo();
        return $this->documentInfo;
    }

    /**
     * custom-info - 0..n (любое число, опционально);
     * @param $id
     * @return CustomInfo
     */
    public function getCustomInfo($id)
    {
        if(isset($this->customInfo[$id]))
            return $this->customInfo[$id];
        else
            return $this->customInfo[$id] = new CustomInfo();
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