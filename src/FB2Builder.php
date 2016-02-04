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
     * @var null
     */
    protected $fictionBook = NULL;


    /**
     * @return \FB2BuilderFictionBook|null
     */
    public function getFictionBook()
    {
        if(!$this->fictionBook instanceof \FB2BuilderFictionBook)
            return $this->fictionBook = new \FB2BuilderFictionBook();
        return $this->fictionBook;
    }

}
$a = new FB2Builder();
$fb = $a->getFictionBook();
$titleInfo = $fb->getDescription()->getTitleInfo();
$titleInfo->getAuthor()->setFirstname('Имя');
$titleInfo->getAuthor()->setLastname('ФАм');
$titleInfo->getAuthor()->setNickname('head');
$titleInfo->getBookTitle()->setTitle('Хуевая книга','ru');
$titleInfo->getDate()->setDate('04.02.2016');
$titleInfo->getLang()->setLang('ru');
$titleInfo->getLang()->getValue();

$genre = $titleInfo->getGenre();
$genres = ['sf_cyberpunk','sf_space','sf'];

foreach($genres as $k => $v)
    $genre->add($v);

print_r($genre->getValue());


