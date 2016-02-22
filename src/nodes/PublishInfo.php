<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 23:08
 */
namespace FB2Builder\nodes;

/**
 * Class PublishInfo
 * @package FB2Builder\nodes
 */
class PublishInfo extends AbstractBuildXML
{
    /**
     * @var BookName
     */
    protected $bookName;
    /**
     * @var Publisher
     */
    protected $publisher;
    /**
     * @var City
     */
    protected $city;
    /**
     * @var Year
     */
    protected $year;
    /**
     * @var Isbn
     */
    protected $isbn;
    /**
     * @var array Sequence
     */
    protected $sequence = [];

    /**
     * book-name - 0..1 (один, опционально) - название;
     * @return BookName
     */
    public function getBookName()
    {
        if(!$this->bookName instanceof BookName)
            return $this->bookName = new BookName();
        return $this->bookName;
    }


    /**
     * publisher - 0..1 (один, опционально) - издательство;
     * @return Publisher
     */
    public function getPublisher()
    {
        if(!$this->publisher instanceof Publisher)
            return $this->publisher = new Publisher();
        return $this->publisher;
    }


    /**
     * city - 0..1 (один, опционально)- место издания;
     * @return City
     */
    public function getCity()
    {
        if(!$this->city instanceof City)
            return $this->city = new City();
        return $this->city;
    }


    /**
     * year - 0..1 (один, опционально) - год издания;
     * @return Year
     */
    public function getYear()
    {
        if(!$this->year instanceof Year)
            return $this->year = new Year();
        return $this->year;
    }


    /**
     * isbn - 0..1 (один, опционально) - ISBN издания;
     * @return Isbn
     */
    public function getIsbn()
    {
        if(!$this->isbn instanceof Isbn)
            return $this->isbn = new Isbn();
        return $this->isbn;
    }


    /**
     * sequence - 0..n (любое число, опционально) - серия (серии) изданий, в которую входит книга.
     * @param $id
     * @return Sequence
     */
    public function getSequence($id)
    {
        if(isset($this->sequence[$id]))
            return $this->sequence[$id];
        else
            return $this->sequence[$id] = new Sequence();
    }
    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'publish-info';
    }
}