<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 15:59
 */
namespace FB2Builder;

/**
 * Class FictionBook
 * @package FB2Builder
 */
class FictionBook extends AbstractBuildXML
{
    /**
     * @var Description
     */
    protected $description = NULL;
    /**
     * @var Body
     */
    protected $body = NULL;
    /**
     * @var StyleSheet
     */
    protected $stylesheet = NULL;
    /**
     * @var Binary
     */
    protected $binary = NULL;

    /**
     * <stylesheet> - 0..n (любое число, опционально);
     * <description> - 1 (один, обязателен);
     * <body> - 1..n (любое число, один обязaтелен);
     * <binary> - 0..n (любое число, опционально).
     */

    /**
     * @return Description
     */
    public function getDescription()
    {
        if(!$this->description instanceof Description)
            return $this->description = new Description();
        return $this->description;
    }

    /**
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'FictionBook';
    }
}
/*<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<FictionBook xmlns=\"http://www.gribuser.ru/xml/fictionbook/2.0\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
    <description>
        <title-info/>
        <document-info/>
    </description>
    <body/>
</FictionBook>
*/