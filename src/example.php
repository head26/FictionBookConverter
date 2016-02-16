<?php
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 16.02.2016
 * Time: 18:29
 */
require '../vendor/autoload.php';
use FB2Builder\FB2Builder;
$FB2Builder = new FB2Builder();
$fb = $FB2Builder->getFictionBook();

$titleInfo = $fb->getDescription()->getTitleInfo();
$tIAuthor = $titleInfo->getAuthor();
$tIAuthor->getFirstname()->setValue('Имя');
$tIAuthor->getMiddlename()->setValue('Отчество');
$tIAuthor->getLastname()->setValue('Фамилия');
$tIAuthor->getNickname()->setValue('head');
$tIAuthor->getHomePage()->setValue('vk.com');
$tIAuthor->getId()->setValue('jff23489hf293hf9823');
$tIAuthor->getEmail()->setValue('26soft@mail.ru');

$titleInfo->getBookTitle()->setValue('Хуевая книга');
$titleInfo->getDate()->setValue('04.02.2016');
$titleInfo->getLang()->setValue('ru');

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
