<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 03.02.2016
 * Time: 17:53
 */
namespace FB2Builder;
class Author extends AbstractBuildXML
{
    protected $firstname = NULL;
    protected $middlename = NULL;
    protected $lastname = NULL;
    protected $nickname = NULL;
    protected $homePage = NULL;
    protected $email = NULL;
    protected $id = NULL;

    /**
     * <first-name> - 0..1 (один, обязателен при отсутствии <nickname>, иначе опционально) - имя;
     * <middle-name> - 0..1 (один, опционально) - отчество;
     * <last-name> - 0..1 (один, обязателен при отсутствии <nickname>, иначе опционально) - фамилия;
     * <nickname> - 0..1 (один, обязателен при отсутствии <first-name> и <last-name>, иначе опционально);
     * <home-page> - 0..n (любое число, опционально);
     * <email> - 0..n (любое число, опционально);
     * <id> - 0..1 (один, опционально) с версии 2.2 - идентификатор автора, присваивается библиотекой.
     */
    /**
     * @return Firstname
     */
    public function getFirstname()
    {
        if(!$this->firstname instanceof Firstname)
            return $this->firstname = new Firstname();
        return $this->firstname;
    }


    /**
     * @return Middlename
     */
    public function getMiddlename()
    {
        if(!$this->middlename instanceof Middlename)
            return $this->middlename = new Middlename();
        return $this->middlename;
    }


    /**
     * @return string|null
     */
    public function getLastname()
    {
        return $this->lastname;
    }


    /**
     * @param $lastname
     * @return Author
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }


    /**
     * @return string|null
     */
    public function getNickname()
    {
        return $this->nickname;
    }


    /**
     * @param $nickname
     * @return Author
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
        return $this;
    }


    /**
     * @return string|null
     */
    public function getHomePage()
    {
        return $this->homePage;
    }


    /**
     * @param $homePage
     * @return Author
     */
    public function setHomePage($homePage)
    {
        $this->homePage = $homePage;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @param $id
     * @return Author
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }


    /**
     * @param $email
     * @return Author
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    static public function getXMLNodeName()
    {
        return 'author';
    }
}