<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 13:55
 */
class FB2BuilderBookTitle
{
    protected $lang = '';
    protected $title = '';

    /**
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param $title
     * @param $lang
     */
    public function setTitle($title, $lang)
    {
        $this->title = $title;
        $this->title = $lang;
    }
}