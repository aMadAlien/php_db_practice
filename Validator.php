<?php

class Validator
{
    // check if field is not empty
    public static function string($value, $min = 1, $max = INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }

    // check if email is valid ("example@mail.com", but not "segeshsrhs")
    public static function email($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}