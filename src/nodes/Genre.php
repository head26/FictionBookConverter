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
    protected $genres = [];
    /**
     * Атрибуты
     * match (опциональный, значение по умолчанию "100") ? число от "1" до "100", задающее субъективное процентное соответствие данному жанру.
     */

    /**
     * @return array
     */
    public function getValue()
    {
        return $this->genres;
    }


    /**
     * @param string $genre
     * @return FB2BuilderGenre
     */
    public function add($genre)
    {
        $this->genres[] = trim($genre);
        array_unique($this->genres);
        return $this;
    }

    static public function getXMLNodesName()
    {
        return [
            'genres' => 'genre'
        ];
    }


};