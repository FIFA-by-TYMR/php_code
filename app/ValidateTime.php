<?php

namespace app;

class validateTime
{
    public function validateTime($first, $pause, $second){
        $min = '-';
        if (strpos($first, $min) !== false || strpos($pause, $min) !== false  || strpos($second, $min) !== false ){
            return false;
        }
        else{
            return true;
        }
    }
    public function validateTimeNumber($first, $pause, $second){
        if (is_numeric($first) !== false && is_numeric($pause) !== false && is_numeric($second) !== false ){
            return true;
        }
        else{
            return false;
        }
    }
}