<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 03.02.2016
 * Time: 17:53
 */
class FB2BuilderAuthor extends FB2BuilderAbstractNodes
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
     * @param $firstname
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return null
     */
    public function getMiddlename()
    {
        return $this->middlename;
    }


    /**
     * @param $middlename
     * @return $this
     */
    public function setMiddlename($middlename)
    {
        $this->middlename = $middlename;
        return $this;
    }


    /**
     * @return null
     */
    public function getLastname()
    {
        return $this->lastname;
    }


    /**
     * @param $lastname
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }


    /**
     * @return null
     */
    public function getNickname()
    {
        return $this->nickname;
    }


    /**
     * @param $nickname
     * @return $this
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
        return $this;
    }


    /**
     * @return null
     */
    public function getHomePage()
    {
        return $this->homePage;
    }


    /**
     * @param $homePage
     * @return $this
     */
    public function setHomePage($homePage)
    {
        $this->homePage = $homePage;
        return $this;
    }

    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @param $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    function buildXML($xml)
    {
        // TODO: Implement getXML() method.
    }
}