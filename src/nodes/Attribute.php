<?php
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 16.02.2016
 * Time: 16:12
 */

namespace FB2Builder\nodes;

/**
 * Class Attribute
 * @property lang
 * @package FB2Builder\nodes
 */
class Attribute
{
    /**
     * @var mixed[]
     */
    protected $data = [];
    /**
     * Добавляет атрибут
     *
     * @param string $key
     * @param mixed $value
     * @return Attribute
     */
    public function set($key, $value)
    {
        $this->data[$key] = $value;
        return $this;
    }

    /**
     * @param $value
     * @return Attribute
     */
    public function setLang($value)
    {
        $this->data['xml:lang'] = $value;
        return $this;
    }

    /**
     * @param $value
     * @return Attribute
     */
    public function setNumber($value){
        $this->data['number'] = $value;
        return $this;
    }

    /**
     * @param $value
     * @return Attribute
     */
    public function setName($value){
        $this->data['name'] = $value;
        return $this;
    }

    /**
     * @param $value
     * @return Attribute
     */
    public function setValue($value){
        $this->data['value'] = $value;
        return $this;
    }
    /**
     * @param $value
     * @return Attribute
     */
    public function setType($value){
        $this->data['type'] = $value;
        return $this;
    }
    /**
     * @param $value
     * @return Attribute
     */
    public function setXlinkType($value){
        $this->data['xlink:type'] = $value;
        return $this;
    }
    /**
     * @param $value
     * @return Attribute
     */
    public function setXlinkHref($value){
        $this->data['xlink:href'] = $value;
        return $this;
    }
    /**
     * @param $value
     * @return Attribute
     */
    public function setAlt($value){
        $this->data['alt'] = $value;
        return $this;
    }
    /**
     * @param $value
     * @return Attribute
     */
    public function setTitle($value){
        $this->data['title'] = $value;
        return $this;
    }
    /**
     * @param $value
     * @return Attribute
     */
    public function setId($value){
        $this->data['id'] = $value;
        return $this;
    }

    /**
     * Возвращает атрибут по ключу, без ключа возвращает все атрибуты
     *
     * @param string $key
     * @return mixed
     */
    public function get($key = '')
    {
        if(empty($key))
            return $this->data;
        return isset($this->data[$key]) ? $this->data[$key] : null;
    }
    /**
     * Удаляет атрибут по ключу
     *
     * @param string $key
     * @return void
     */
    final public function removeAttr($key)
    {
        unset($this->data[$key]);
    }
}