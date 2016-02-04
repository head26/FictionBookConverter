<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 03.02.2016
 * Time: 17:53
 */
class FB2BuilderAuthor
{
    protected $firstname = NULL;
    protected $middlename = NULL;
    protected $lastname = NULL;
    protected $nickname = NULL;
    protected $homePage = NULL;
    protected $id = NULL;

    /**
     * @return null
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param null $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return null
     */
    public function getMiddlename()
    {
        return $this->middlename;
    }

    /**
     * @param null $middlename
     */
    public function setMiddlename($middlename)
    {
        $this->middlename = $middlename;
    }

    /**
     * @return null
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param null $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return null
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @param null $nickname
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
    }

    /**
     * @return null
     */
    public function getHomePage()
    {
        return $this->homePage;
    }

    /**
     * @param null $homePage
     */
    public function setHomePage($homePage)
    {
        $this->homePage = $homePage;
    }

    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param null $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}