<?php
require_once __DIR__ . "/fb2.php";
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 29.01.2016
 * Time: 14:03
 */
class converter
{
    protected $body;

    protected $author;
    protected $bookTitle = '';
    protected $genres = [];
    protected $annotation;
    protected $keywords;
    protected $date;
    protected $lang;


    /**
     * @param array $genre
     */
    public function setGenre($genre)
    {
        if(!empty($genre) && is_array($genre)) {
            $this->genres = array_merge($this->genres,$genre);
            $this->genres = array_unique($this->genres);
        }
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @param string $bookTitle
     */
    public function setBookTitle($bookTitle)
    {
        $this->bookTitle = trim($bookTitle);
    }

    public function build()
    {
        $fb2 = new fb2();
        $fb2->addGenre($this->genres);
        $fb2->addBookTitle($this->bookTitle);
        $fb2->saveFb2();
    }
}
$a = new converter();
$a->setGenre(["sf_fantasy","dsfdsf"]);
$a->setBookTitle('про пиздюли');
$a->build();
/*
<description>
  <title-info>
  <genre>history_russia</genre>
  <genre>romance_historical</genre>
  <genre>literature_classics</genre>
  <genre>literature_history</genre>
  <genre>literature_war</genre>
  <genre>literature_rus_classsic</genre>
  <genre>computers</genre>
  <author>
    <first-name>Лев</first-name>
    <middle-name>Николаевич</middle-name>
    <last-name>Толстой</last-name>
  </author>
  <book-title>Война и мир</book-title>
  <annotation>
    <p>Это тестовый файл FictionBook 2.0. Создан Грибовым Дмитрием
    в демонстрационных целях и для экспериментов с библиотекой
    FIctionBook.lib. К сожалению сам роман я в FB2 пока не перевел.</p>
    <empty-line/>
    <p>Роман Толстого ?Война и мир? был написан в 1869 году. Это
    произведение явилось, по словам многих известных писателей и
    критиков, ?величайшим романом в мире?. Главная мысль в романе ?
    мысль народная. Из множества действующих лиц произведения
    значительное место уделено изображению простого люда. Причиной
    этого явилось глубокое понимание и правильная оценка Толстым
    решающей роли народа в исходе войны 1812 года, где полностью
    раскрылся ?характер русского войска и народа?. Немалое место в
    романе занимают также картины жизни русского крестьянства. Ведь
    в годы создания романа в центре общественного внимания стала
    проблема ?мужика?.</p>
    <poem>
    <title>
      <p>Название стиха</p>
    </title>
    <epigraph>
      <p>Стихотворение посвящается тегу "stanza"</p>
    </epigraph>
    <stanza>
      <v>Типа тут стихи</v>
      <v>В этой строфе</v>
      <v>Типа тут стихи</v>
      <v>В этой строфе</v>
    </stanza>
    <stanza>
      <v>Здесь по новой стихи</v>
      <v>В этой строфе</v>
      <v>Обратно стихи стихи</v>
      <v>В этой строфе</v>
    </stanza>
    </poem>
    <cite>
    <p>Здесь можно кого-нибудь процитировать</p>
    <text-author>Автор/Источник Цитаты</text-author>
    </cite>
    <p>Большую часть романа занимают картины военных действий. В
    этом произведении Толстым дано изображение двух войн: 1805 и
    1812 годов. В обеих войнах главным и решающим фактором явились
    народные массы. Особенно большую роль сыграл народ в войне 1812
    года, которая велась в России и была агрессивной, захватнической
    со стороны Франции, но народной, справедливой со стороны России.
Поэтому цель ?русского народа была одна: очистить землю от
    нашествия?. Сознание справедливости своей борьбы придавало
    русским людям огромную силу. Это, прежде всего, видно из
    Бородинского сражения, где стал понятен ?весь смысл и все
    значение этой войны?. Бородинская битва, по словам Толстого,
    необыкновенное, не повторяющееся и не имевшее примеров событие,
    и оно есть одно из самых поучительных явлений истории. Писатель
    нисколько не сомневался в том, что на Бородинском поле русская
    армия одержит победу, которая будет иметь огромные
    последствия <a xlink:href="#annotation_src" type="note">[источник]</a>.
    </p>
  </annotation>
  <keywords>1912, война, роман, отечественная, наполеон, кутузов,
  император, политика, нравственность, изыскания, великий, большой,
  французский, родина, патриотизм, личность, роль личности в истории,
  дворянство, свет, власть, безухов, болконский, должное,
  крепостное право, крепостничество, подвиг, народ</keywords>
  <date value="1869-01-01">1863-1869</date>
  <coverpage>
    <image xlink:href="#cover.jpg"/>
  </coverpage>
  <lang>ru</lang>
  <src-lang>ru</src-lang>
  <translator>
    <first-name>Вообще-то</first-name>
    <middle-name>никакого переводчика нет</middle-name>
    <last-name>Это так, для примера</last-name>
  </translator>
  <!-- Этот роман не является частью серии романов, но для книги "Отрочество" из трилогии
  "Детство, Отрочество, Юность", например, сделовало бы указать так:-->
  <sequence name="Детство, Отрочество, Юность" number="2"/>
  </title-info>
  <document-info>
  <author>
    <nickname>GribUser</nickname>
    <home-page>http://www.gribuser.ru</home-page>
    <email>grib@gribuser.ru</email>
  </author>
  <program-used>ClearTXT, XMLSpy, HomeSite 5.0</program-used>
  <date value="2002-10-15">15 ноября 2002г., 19:53</date>
  <src-url>http://www.magister.msk.ru/library/tolstoy/wp/wp00.htm</src-url>
  <src-ocr>Oleg E. Kolesnikov</src-ocr>
  <id>GribUser_WarAndPeace_D49FHSH8l0HS5</id>
  <version>2.0</version>
  <history>
    <p>Этот документ первоначально был создан для FictionBook 1.0 и позднее переделан для FB2.0</p>
  </history>
  </document-info>
  <publish-info>
  <book-name>Л.Н.Толстой, Полное Собрание Сочинений</book-name>
  <publisher>ГИХЛ</publisher>
  <city>Москва</city>
  <year>1957</year>
  <isbn>Тут пишем ISBN код книги, если есть</isbn>
  </publish-info>
  <custom-info info-type="general">
    Здесь можно расположить дополнительную информацию, не
  укладывающуюся в заданную схему. Это может быть как описательная
  информация, так и коммерческая информация, связанная с книгой -
например, информация о том, где можно купить бумажное издание
</custom-info>
</description>*/