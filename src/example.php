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
        'Nickname' => 'head',
        'HomePage' => 'vk.com',
        'Id' => 'jff23489hf293hf9823',
        'Email' => '26soft@mail.ru',
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
    $tIAuthor->getFirstname()
        ->setValue($author['Firstname'])
        ->getAttribute()
        ->setLang('ru');
    $tIAuthor->getMiddlename()->setValue($author['Middlename']);
    $tIAuthor->getLastname()->setValue($author['Lastname']);
    $tIAuthor->getNickname()->setValue($author['Nickname']);
    $tIAuthor->getHomePage()->setValue($author['HomePage']);
    $tIAuthor->getId()->setValue($author['Id']);
    $tIAuthor->getEmail(1)->setValue($author['Email']);
}

$tITranslator = $titleInfo->getTranslator(1);
$tITranslator->getFirstname()->setValue('Имя');
$tITranslator->getMiddlename()->setValue('Отчество');
$tITranslator->getLastname()->setValue('Фамилия');
$tITranslator->getNickname()->setValue('head');
$tITranslator->getHomePage()->setValue('vk.com');
$tITranslator->getId()->setValue('jff23489hf293hf9823');
$tITranslator->getEmail(1)->setValue('26soft@mail.ru');

$titleInfo->getBookTitle()->setValue('Хуевая книга');
$titleInfo->getDate()->setValue('04.02.2016');
$titleInfo->getLang()->setValue('ru');
$titleInfo->getKeywords()->setValue('pam, param, pampam');

$titleInfo->getSequence(1)->getAttribute()
    ->setLang('ru')
    ->setName('Цыгане')
    ->setNumber(2);

$titleInfo->getAnnotation()->setValue("<p>вот такая вот шляпа</p>");

$genres = ['sf_cyberpunk','sf_space'];

foreach($genres as $k => $v)
    $titleInfo->getGenre($v)->setValue($v);

//$titleInfo->getCoverpage()->getImage(1)->setImage('/FictionBookConverter/джеки чан епта.jpg');
$documentInfo = $description->getDocumentInfo();

$docAuthor = $documentInfo->getAuthor(1);
$docAuthor->getFirstname()
    ->setValue('имя')
    ->getAttribute()
    ->setLang('ru');
$docAuthor->getMiddlename()->setValue("Отчество");
$docAuthor->getLastname()->setValue("Фамилия");
$docAuthor->getNickname()->setValue("ник");
$docAuthor->getHomePage()->setValue("страница");
$docAuthor->getId()->setValue("ид");
$docAuthor->getEmail(1)->setValue("мыло");
$documentInfo->getDate()->setValue('2344-12-12');
$documentInfo->getId()->setValue("dfg");
$documentInfo->getVersion()->setValue('1.1');
$str = '\n <p>\n    &nbsp;&nbsp; Слуга, в котором все: и бирюзовая сережка в ухе, и напомаженные разноцветные волосы, и учтивые телодвижения, словом, все изобличало человека новейшего, усовершенствованного\n    поколения, посмотрел снисходительно вдоль дороги и ответствовал: \"Никак нет-с, не видать\".\n  </p>\n';

$fb->getBody(1)->setValue($str);

$FB2Builder->save("/FictionBookConverter/test.fb2");