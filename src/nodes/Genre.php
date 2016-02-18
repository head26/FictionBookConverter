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
class Genre extends AbstractBuildXML
{
    /**
     * @var array
     */
    protected $genre = [];
    /**
     * Атрибуты
     * match (опциональный, значение по умолчанию "100") ? число от "1" до "100",
     * задающее субъективное процентное соответствие данному жанру.
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
     * @return Genre
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

    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'genre';
    }


};