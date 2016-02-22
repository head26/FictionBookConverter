<?php
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 22.02.2016
 * Time: 15:41
 */

namespace FB2Builder\nodes;


/**
 * Class Image
 * Картинка, иллюстрация в тексте.
 * Определены два типа картинок: обычные (imageType) и внутри текста (inlineImageType).
 * @package FB2Builder\nodes
 */
class Image extends AbstractBuildXML
{
    //TODO: Делать надо епта
    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'image';
    }
}