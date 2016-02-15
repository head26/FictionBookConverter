<?php

/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 04.02.2016
 * Time: 16:07
 */
class FB2BuilderTranslator extends FB2BuilderAbstractBuildXML
{
    protected $firstname = NULL;
    protected $middlename = NULL;
    protected $lastname = NULL;
    protected $nickname = NULL;
    protected $homePage = NULL;
    protected $id = NULL;

    /**
     * @return string|null
     */
    public function getFirstname()
    {
        return $this->firstname;
    }


    /**
     * @param string $firstname
     * @return FB2BuilderTranslator
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
     * @param string $middlename
     * @return FB2BuilderTranslator
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
     * @param string $lastname
     * @return FB2BuilderTranslator
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
     * @param string $nickname
     * @return FB2BuilderTranslator
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
     * @param string $homePage
     * @return FB2BuilderTranslator
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
     * @param string $id
     * @return FB2BuilderTranslator
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    static public function getXMLNodeName()
    {
        // TODO: Implement getXMLNodesName() method.
    }


}