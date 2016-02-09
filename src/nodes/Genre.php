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
     * @return array
     */
    public function getValue()
    {
        return $this->genres;
    }


    /**
     * @param $genre
     * @return $this
     */
    public function add($genre)
    {
        $this->genres[] = trim($genre);
        array_unique($this->genres);
        return $this;
    }

    static public function getXMLNodesName()
    {
        // TODO: Implement getXMLNodesName() method.
    }


};