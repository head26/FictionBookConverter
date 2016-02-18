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
     * @var Sequence
     */
    protected $sequence;


    /**
     * @return BookName
     */
    public function getBookName()
    {
        if(!$this->bookName instanceof BookName)
            return $this->bookName = new BookName();
        return $this->bookName;
    }


    /**
     * @return Publisher
     */
    public function getPublisher()
    {
        if(!$this->publisher instanceof Publisher)
            return $this->publisher = new Publisher();
        return $this->publisher;
    }


    /**
     * @return City
     */
    public function getCity()
    {
        if(!$this->city instanceof City)
            return $this->city = new City();
        return $this->city;
    }


    /**
     * @return Year
     */
    public function getYear()
    {
        if(!$this->year instanceof Year)
            return $this->year = new Year();
        return $this->year;
    }


    /**
     * @return Isbn
     */
    public function getIsbn()
    {
        if(!$this->isbn instanceof Isbn)
            return $this->isbn = new Isbn();
        return $this->isbn;
    }


    /**
     * @return Sequence
     */
    public function getSequence()
    {
        if(!$this->sequence instanceof Sequence)
            return $this->sequence = new Sequence();
        return $this->sequence;
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