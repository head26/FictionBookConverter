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
     * <first-name> - 0..1 (один, обязателен при отсутствии <nickname>, иначе опционально) - имя;
     * <middle-name> - 0..1 (один, опционально) - отчество;
     * <last-name> - 0..1 (один, обязателен при отсутствии <nickname>, иначе опционально) - фамилия;
     * <nickname> - 0..1 (один, обязателен при отсутствии <first-name> и <last-name>, иначе опционально);
     * <home-page> - 0..n (любое число, опционально);
     * <email> - 0..n (любое число, опционально);
     * <id> - 0..1 (один, опционально) с версии 2.2 - идентификатор автора, присваивается библиотекой.
     */

    /**
     * @return string|null
     */
    public function getFirstname()
    {
        return $this->firstname;
    }


    /**
     * @param string $firstname
     * @return FB2BuilderAuthor
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMiddlename()
    {
        return $this->middlename;
    }


    /**
     * @param $middlename
     * @return FB2BuilderAuthor
     */
    public function setMiddlename($middlename)
    {
        $this->middlename = $middlename;
        return $this;
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
     * @return FB2BuilderAuthor
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
     * @return FB2BuilderAuthor
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
     * @return FB2BuilderAuthor
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
     * @return FB2BuilderAuthor
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
     * @return FB2BuilderAuthor
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
        return [
            'parent' => 'author',
            'property' => [
                'first-name' => 'firstname',
                'middle-name' => 'middlename',
                'last-name' => 'lastname',
                'nickname' => 'nickname',
                'home-page' => 'homePage',
                'email' => 'email',
                'id' => 'id',
                ]
        ];
    }
}