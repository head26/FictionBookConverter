<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 03.02.2016
 * Time: 17:51
 */
class FB2BuilderGenre extends FB2BuilderAbstractBuildXML
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
     * @param int $match 1-100
     * @return FB2BuilderGenre
     */
    public function add($genre,$match = -1)
    {
        $data = [
            'value' => trim($genre),
        ];
        if((int)$match >= 1)
            $data = array_merge($data,['attr' => ['match' => trim($match)]]);

        $this->genre[] = $data;

        return $this;
    }

    static public function getXMLNodeName()
    {
        return [];
    }


};