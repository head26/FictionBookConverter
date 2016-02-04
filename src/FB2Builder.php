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
$a->getDescription()->getTitleInfo()->getAuthor()->setFirstname('Имя');
$a->getDescription()->getTitleInfo()->getAuthor()->setLastname('ФАм');
$a->getDescription()->getTitleInfo()->getAuthor()->setNickname('head');
$a->getDescription()->getTitleInfo()->getBookTitle()->setTitle('Хуевая книга','ru');
$a->getDescription()->getTitleInfo()->getDate()->setDate('04.02.2016');
$a->getDescription()->getTitleInfo()->getLang()->setLang('ru');
$a->getDescription()->getTitleInfo()->getLang()->getValue();

$genres = ['sf_cyberpunk','sf_space','sf'];
foreach($genres as $k => $v)
    $a->getDescription()->getTitleInfo()->getGenre()->setGenre($v);

print_r($a->getDescription()->getTitleInfo()->getGenre()->getValue());


