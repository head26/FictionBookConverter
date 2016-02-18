<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 13:58
 */
namespace FB2Builder\nodes;
/**
 * Class Annotation
 * @package FB2Builder\nodes
 */
class Annotation extends AbstractBuildXML
{
    // TODO: к работе.
    /**
     * id (опционально) - Идентификатор (якорь, метка) для ссылок на данный элемент.
     * xml:lang (опционально) - язык.
     */

    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'annotation';
    }
}