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
    protected $email = NULL;
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

    /**
     * @return null
     */
    public function getEmail()
    {
        return $this->email;
    }


    /**
     * @param $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /*function buildXML()
    {
        $authorXML = $domDoc->createElement('author');
        $authorXML->appendChild($domDoc->createElement('first-name',$this->firstname));
        $authorXML->appendChild($domDoc->createElement('middle-name',$this->middlename));
        $authorXML->appendChild($domDoc->createElement('last-name',$this->lastname));
        $authorXML->appendChild($domDoc->createElement('nickname',$this->nickname));
        $authorXML->appendChild($domDoc->createElement('home-page',$this->homePage));
        $authorXML->appendChild($domDoc->createElement('email',$this->email));
        $authorXML->appendChild($domDoc->createElement('id',$this->id));
        return $authorXML;
        // TODO: Implement getXML() method.
    }*/

    static public function getXMLNodesName()
    {
        // TODO: Implement getXMLNodesName() method.
    }
}
/*
<first-name> - 0..1 (один, обязателен при отсутствии <nickname>, иначе опционально) - имя;
<middle-name> - 0..1 (один, опционально) - отчество;
<last-name> - 0..1 (один, обязателен при отсутствии <nickname>, иначе опционально) - фамилия;
<nickname> - 0..1 (один, обязателен при отсутствии <first-name> и <last-name>, иначе опционально);
<home-page> - 0..n (любое число, опционально);
<email> - 0..n (любое число, опционально);
<id> - 0..1 (один, опционально) с версии 2.2 - идентификатор автора, присваивается библиотекой.
*/