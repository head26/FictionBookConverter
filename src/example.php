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
    $tIAuthor->getFirstname()->setValue($author['Firstname']);
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


$titleInfo->getAnnotation()->setValue("    <p></p>");

$genres = ['sf_cyberpunk','sf_space','sf'];

foreach($genres as $k => $v)
    $titleInfo->getGenre($v)->setValue($v);

$fb->getBody(1)->setValue("<title><p>Анджей Сапковский</p>
<p>Ведьмак. Последнее желание</p>
</title><section><cite><p>Andrzej Sapkowski</p>
<p>Ostatnie Zyczenie</p>
<p>Печатается с разрешения автора и литературного агентства NOWA Publishers при содействии Агентства Александра Корженевского</p>
<p>Copyright © Andrzej Sapkowski, 1993</p>
<p>© Е.П. Вайсброт, наследники, перевод на русский язык</p>
<p>© ООО «Издательство АСТ», 2015</p>
</cite></section></title>");
$FB2Builder->save();
