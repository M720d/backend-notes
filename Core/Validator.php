<?php
namespace Core;
class Validator {
    public static function stringCheck($value, $min =1, $max=1000){
        $value = trim($value);

        return strlen($value)>=$min && strlen($value)<$max;
    }
}