<?php
/**
 * Created by PhpStorm.
 * User: tt140
 * Date: 2-6-2017
 * Time: 10:09
 */

namespace app;


class validateScore
{
    public function validateNumberMinus($teama, $teamb){
        $min = '-';
        if (strpos($teama, $min) !== false || strpos($teamb, $min) !== false){
            return false;
        }
        else{
            return true;
        }
    }
    public function validateNumberIsNumber($teama, $teamb){
        if (is_numeric($teama) !== false && is_numeric($teamb) !== false){
            return true;
        }
        else{
            return false;
        }
    }
}