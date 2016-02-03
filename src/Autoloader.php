<?php
/**
 * Created by PhpStorm.
 * User: Denis Kuliev
 * Date: 03.02.2016
 * Time: 14:29
 */

FB2BuilderAutoloader::register();

class FB2BuilderAutoloader
{

    public static function register()
    {
        if (version_compare(PHP_VERSION, '5.3.0') >= 0) {
            return spl_autoload_register(array('FB2BuilderAutoloader', 'load'), true, true);
        } else {
            return spl_autoload_register(array('FB2BuilderAutoloader', 'load'));
        }
    }

    public static function load($pClassName)
    {
        if ((class_exists($pClassName, false)) || (strpos($pClassName, 'FB2Builder') !== 0)) {
            return false;
        }

        $pClassFilePath = FB2Builder_ROOT.'nodes/'.
            str_replace('FB2Builder', '', $pClassName) .
            '.php';

        require($pClassFilePath);
    }
}
