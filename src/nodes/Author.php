<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 03.02.2016
 * Time: 17:53
 */
namespace FB2Builder\nodes;
/**
 * Class Author
 * @package FB2Builder\nodes
 */
class Author extends AbstractBuildXML
{
    /**
     * @var Firstname
     */
    protected $firstname;
    /**
     * @var Middlename
     */
    protected $middlename;
    /**
     * @var Lastname
     */
    protected $lastname;
    /**
     * @var Nickname
     */
    protected $nickname;
    /**
     * @var HomePage
     */
    protected $homePage;
    /**
     * @var array Email
     */
    protected $email = [];
    /**
     * @var Id
     */
    protected $id;

    /**
     * first-name - 0..1 (один, обязателен при отсутствии nickname, иначе опционально) - имя;
     * @return Firstname
     */
    public function getFirstname()
    {
        if(!$this->firstname instanceof Firstname)
            return $this->firstname = new Firstname();
        return $this->firstname;
    }


    /**
     * middle-name - 0..1 (один, опционально) - отчество;
     * @return Middlename
     */
    public function getMiddlename()
    {
        if(!$this->middlename instanceof Middlename)
            return $this->middlename = new Middlename();
        return $this->middlename;
    }


    /**
     * last-name - 0..1 (один, обязателен при отсутствии nickname, иначе опционально) - фамилия;
     * @return Lastname
     */
    public function getLastname()
    {
        if(!$this->lastname instanceof Lastname)
            return $this->lastname = new Lastname();
        return $this->lastname;
    }

    /**
     * nickname - 0..1 (один, обязателен при отсутствии first-name и last-name, иначе опционально);
     * @return Nickname
     */
    public function getNickname()
    {
        if(!$this->nickname instanceof Nickname)
            return $this->nickname = new Nickname();
        return $this->nickname;
    }

    /**
     * home-page - 0..n (любое число, опционально);
     * @return HomePage
     */
    public function getHomePage()
    {
        if(!$this->homePage instanceof HomePage)
            return $this->homePage = new HomePage();
        return $this->homePage;
    }

    /**
     * email - 0..n (любое число, опционально);
     * @param $id
     * @return Email
     */
    public function getEmail($id)
    {
        if(isset($this->email[$id]))
            return $this->email[$id];
        else
            return $this->email[$id] = new Email();
    }

    /**
     * id - 0..1 (один, опционально) с версии 2.2 - идентификатор автора, присваивается библиотекой.
     * @return Id
     */
    public function getId()
    {
        if(!$this->id instanceof Id)
            return $this->id = new Id();
        return $this->id;
    }

    /**
     * XML Node Name
     * @return string
     */
    static public function getXMLNodeName()
    {
        return 'author';
    }
}