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

/**
 * Class FB2Builder
 * @package FB2Builder
 */
class FB2Builder
{
    /**
     * @var \FB2BuilderFictionBook
     */
    protected $fictionBook = NULL;


    /**
     * @return \FB2BuilderFictionBook
     */
    public function getFictionBook()
    {
        if(!$this->fictionBook instanceof \FB2BuilderFictionBook)
            return $this->fictionBook = new \FB2BuilderFictionBook();
        return $this->fictionBook;
    }


    public function save() {
        if($this->fictionBook instanceof \FB2BuilderFictionBook) {
            $domDoc = new \DOMDocument("1.0", "UTF-8");
            $domDoc->preserveWhiteSpace = FALSE;
            $domDoc->formatOutput = TRUE;
            $this->fictionBook->buildXML($domDoc);
            $this->getFictionBook()->getDescription()->buildXML($domDoc);
        }
    }

}
$FB2Builder = new FB2Builder();
$fb = $FB2Builder->getFictionBook();

$titleInfo = $fb->getDescription()->getTitleInfo();

$tIAuthor = $titleInfo->getAuthor();
$tIAuthor->setFirstname('Имя');
$tIAuthor->setLastname('ФАм');
$tIAuthor->setNickname('head');
/*
$titleInfo->getBookTitle()->setTitle('Хуевая книга','ru');
$titleInfo->getDate()->setDate('04.02.2016');
$titleInfo->getLang()->setLang('ru');
*/
$genre = $titleInfo->getGenre();
$genres = ['sf_cyberpunk','sf_space','sf'];

foreach($genres as $k => $v)
    $genre->add($v);

//print_r($genre->getValue());

$FB2Builder->save();


