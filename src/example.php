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

$description = $fb->getDescription();

$titleInfo = $description->getTitleInfo();

$authors = [
    '1' => [
        'Firstname' => 'Имя',
        'Middlename' => 'Отчество',
        'Lastname' => 'Фамилия',
        'name' => 'head',
        'Nickname' => 'vk.com',
        'HomePage' => 'jff23489hf293hf9823',
        'Id' => '26soft@mail.ru',
    ],
    '2' => [
        'Firstname' => 'Имя2',
        'Middlename' => 'Отчество2',
        'Lastname' => 'Фамилия2',
        'Nickname' => 'head2',
        'HomePage' => 'vk.com',
        'Id' => 'dfgml342oit4',
        'Email' => '26soft@mail.ru',
    ],
];
foreach($authors as $key => $author)
{
    $tIAuthor = $titleInfo->getAuthor($key);
    $tIAuthor->getFirstname()->setValue($author['Firstname']);
    $tIAuthor->getMiddlename()->setValue($author['Middlename']);
    $tIAuthor->getLastname()->setValue($author['Lastname']);
    $tIAuthor->getNickname()->setValue($author['Nickname']);
    $tIAuthor->getHomePage()->setValue($author['HomePage']);
    $tIAuthor->getId()->setValue($author['Id']);
    $tIAuthor->getEmail()->setValue($author['Email']);
}

$tITranslator = $titleInfo->getTranslator();
$tITranslator->getFirstname()->setValue('Имя');
$tITranslator->getMiddlename()->setValue('Отчество');
$tITranslator->getLastname()->setValue('Фамилия');
$tITranslator->getNickname()->setValue('head');
$tITranslator->getHomePage()->setValue('vk.com');
$tITranslator->getId()->setValue('jff23489hf293hf9823');
$tITranslator->getEmail()->setValue('26soft@mail.ru');

$titleInfo->getBookTitle()->setValue('Хуевая книга');
$titleInfo->getDate()->setValue('04.02.2016');
$titleInfo->getLang()->setValue('ru');

$titleInfo->getKeywords()->setValue('pam, param, pampam');




$genres = ['sf_cyberpunk','sf_space','sf'];

foreach($genres as $k => $v)
    $titleInfo->getGenre($v)->setValue($v);
/*
print_r($genre->getValue());
foreach($genre->getValue() as $v) {
    foreach($v['attr'] as $ki => $item)
        echo $v['value'] .' = '. $ki.' = '.$item."\r\n";
}
die();*/

$FB2Builder->save();
