<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 16:07
 */
namespace FB2Builder\nodes;
/**
 * Class Coverpage
 *
 * Содержит ссылку на графическое изображение обложки книги.
 * @package FB2Builder\nodes
 */
class Coverpage extends AbstractBuildXML
{

    /**
     * @var array Image
     */
    protected $image = [];

    /**
     * image 1..n (один или несколько, один обязателен).
     * @param $id
     * @return Image
     */
    public function getImage($id)
    {
        if(isset($this->image[$id]))
            return $this->image[$id];
        else
            return $this->image[$id] = new Image();
    }

    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'coverpage';
    }

}