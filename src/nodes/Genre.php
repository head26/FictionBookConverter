<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 03.02.2016
 * Time: 17:51
 */
class FB2BuilderGenre extends FB2BuilderAbstractNodes
{
    /**
     * @var array
     */
    protected $genre = [];
    /**
     * Атрибуты
     * match (опциональный, значение по умолчанию "100") ? число от "1" до "100", задающее субъективное процентное соответствие данному жанру.
     */

    /**
     * @return array
     */
    public function getValue()
    {
        return $this->genre;
    }


    /**
     * @param string $genre
     * @param string $match
     * @return FB2BuilderGenre
     */
    public function add($genre,$match)
    {
        $this->genre[trim($genre)] =  ['xml:lang' => trim($match)];
        return $this;
    }

    static public function getXMLNodesName()
    {
        return [];
    }


};