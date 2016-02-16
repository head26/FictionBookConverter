<?php
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 16.02.2016
 * Time: 16:12
 */

namespace FB2Builder;

/**
 * Class Attribute
 * @package FB2Builder
 */
class Attribute
{
    /**
     * @var mixed[]
     */
    protected static $data = array();
    /**
     * Добавляет атрибут
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public static function set($key, $value)
    {
        self::$data[$key] = $value;
    }
    /**
     * Возвращает атрибут по ключу
     *
     * @param string $key
     * @return mixed
     */
    public static function get($key)
    {
        return isset(self::$data[$key]) ? self::$data[$key] : null;
    }
    /**
     * Удаляет атрибут по ключу
     *
     * @param string $key
     * @return void
     */
    final public static function removeAttr($key)
    {
        if (array_key_exists($key, self::$data)) {
            unset(self::$data[$key]);
        }
    }
}