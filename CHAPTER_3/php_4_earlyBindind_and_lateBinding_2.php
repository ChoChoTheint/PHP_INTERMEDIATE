<?php

class One{
    public static $name = "waiferkolar";

    public static function authorName(){
        return self::$name;
    }

    public static function getAuthorName(){
        echo static::authorName();
    }
}

class Two extends One{

    public static function authorName(){
        return self::$name . " and cracky shine";
    }

    public static function getAuthorName(){
        echo static::authorName();
    }
}
One::getAuthorName();
echo "<hr/>";
Two::getAuthorName();