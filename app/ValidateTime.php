<?php

namespace app;

class ValidateTime
{
    public function validateTime($first, $pause, $second){
        $min = '-';
        if (strpos($first, $min) !== false || strpos($pause, $min) !== false  || strpos($second, $min) !== false ){
            return false;
        }
        else{
            return true;
        }
        die();
    }
}