<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 03.02.2016
 * Time: 13:55
 */


class FB2BuilderDescription
{
    protected $titleInfo = NULL;

    /**
     * @return FB2BuilderTitleInfo|null
     */
    public function getTitleInfo() {
        if(!$this->titleInfo instanceof FB2BuilderTitleInfo)
            return $this->titleInfo = new FB2BuilderTitleInfo();
        return $this->titleInfo;
    }
}