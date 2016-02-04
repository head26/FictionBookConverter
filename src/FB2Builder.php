<?php
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 03.02.2016
 * Time: 13:54
 */

namespace FB2Builder;

if (!defined('FB2Builder_ROOT')) {
    define('FB2Builder_ROOT', dirname(__FILE__) . '/');
    require(FB2Builder_ROOT . 'Autoloader.php');
}

class FB2Builder
{
    protected $fictionBook = NULL;
    protected $description = NULL;
    protected $body = NULL;
    protected $stylesheet = NULL;
    protected $binary = NULL;


    /**
     * @return \FB2BuilderDescription|null
     */
    public function getDescription()
    {
        if(!$this->description instanceof \FB2BuilderDescription)
            return $this->description = new \FB2BuilderDescription();
        return $this->description;
    }


    /**
     * @return \FB2BuilderDescription|null
     */
    public function getBody()
    {
        if(!$this->description instanceof \FB2BuilderDescription)
            return $this->description = new \FB2BuilderDescription();
        return $this->description;
    }


}
$a = new FB2Builder();
$titleInfo = $a->getDescription()->getTitleInfo();
$titleInfo->getAuthor()->setFirstname('Имя');
$titleInfo->getAuthor()->setLastname('ФАм');
$titleInfo->getAuthor()->setNickname('head');
$titleInfo->getBookTitle()->setTitle('Хуевая книга','ru');
$titleInfo->getDate()->setDate('04.02.2016');
$titleInfo->getLang()->setLang('ru');
$titleInfo->getLang()->getValue();

$genres = ['sf_cyberpunk','sf_space','sf'];
$genre = $titleInfo->getGenre();
foreach($genres as $k => $v)
    $genre->add($v);

print_r($genre->getValue());


