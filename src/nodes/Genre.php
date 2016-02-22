<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 03.02.2016
 * Time: 17:51
 */
namespace FB2Builder\nodes;
/**
 * Class Genre
 * @package FB2Builder\nodes
 */
class Genre extends AbstractNode
{
    /**
     * Атрибуты
     * match (опциональный, значение по умолчанию "100") ? число от "1" до "100",
     * задающее субъективное процентное соответствие данному жанру.
     */
    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'genre';
    }
};