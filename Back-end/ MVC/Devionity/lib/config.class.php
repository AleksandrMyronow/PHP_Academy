<?php
/**
 * Created by PhpStorm.
 * User: aleksandrmyronov
 * Date: 29.08.17
 * Time: 15:45
 */

class Config{
    protected static $settings = array();

    public static function get($key) {
        return isset(self::$settings[$key]) ? self::$settings[$key] : null;

    }

    public static function set($key, $value) {
        self::$settings[$key] = $value;

    }



}