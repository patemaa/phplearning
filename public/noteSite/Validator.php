<?php

class Validator {
    public static function string($value, $min = 1, $max = INF)
    {
//        return strlen($value) === 0;
          $value = trim($value) === 0;

          return strlen($value) >= $min && $value <= $max;
    }

    public static function email ($value){
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}