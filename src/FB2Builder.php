<?php
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 03.02.2016
 * Time: 13:54
 */



namespace FB2Builder;
require '../vendor/autoload.php';
/**
 * Class FB2Builder
 * @package FB2Builder
 */
class FB2Builder
{
    /**
     * @var FictionBook
     */
    protected $fictionBook = NULL;


    /**
     * @param string $xmlns
     * @param string $xlink
     * @return FictionBook
     */
    public function getFictionBook($xmlns = NULL, $xlink = NULL)
    {
        if(!$this->fictionBook instanceof FictionBook)
            return $this->fictionBook = new FictionBook($xmlns, $xlink);
        return $this->fictionBook;
    }


    public function save() {
        if($this->fictionBook instanceof FictionBook) {
            $domDoc = new \DOMDocument("1.0", "UTF-8");
            $domDoc->preserveWhiteSpace = FALSE;
            $domDoc->formatOutput = TRUE;
            $this->fictionBook->buildXML($domDoc);
            echo $domDoc->saveXML();
        }
    }

}
$FB2Builder = new FB2Builder();
$fb = $FB2Builder->getFictionBook();

$titleInfo = $fb->getDescription()->getTitleInfo();

$tIAuthor = $titleInfo->getAuthor();
$tIAuthor->getFirstname()->setValue('Имя', 'ru');
//$tIAuthor->setFirstname('Имя');
$tIAuthor->setLastname('ФАм');
$tIAuthor->setNickname('head');
/*
$titleInfo->getBookTitle()->setTitle('Хуевая книга','ru');
$titleInfo->getDate()->setDate('04.02.2016');
$titleInfo->getLang()->setLang('ru');*/
/*
$genre = $titleInfo->getGenre();
$genres = ['sf_cyberpunk','sf_space','sf'];

foreach($genres as $k => $v)
    $genre->add($v,100);*/
/*
print_r($genre->getValue());
foreach($genre->getValue() as $v) {
    foreach($v['attr'] as $ki => $item)
        echo $v['value'] .' = '. $ki.' = '.$item."\r\n";
}
die();*/

$FB2Builder->save();


