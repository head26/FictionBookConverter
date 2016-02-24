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
    protected $data = array();
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
    public function setLang($value)
    {
        $this->data['xml:lang'] = $value;
        return $this;
    }
    public function setNumber($value){
        $this->data['number'] = $value;
        return $this;
    }
    public function setName($value){
        $this->data['name'] = $value;
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