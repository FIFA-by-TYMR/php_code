<?php

namespace app;

class ValidateAddTeam
{
    public function validateteam($teamname)
    {
        if(!empty($teamname))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function validateplayer($p1)
    {
            if (empty($p1[2]) || empty($p1[1]) || empty($p1[0])){
                return false;
            }
            return true;

    }
    public function validateArray($arr_bool)
    {
        if (in_array(false , $arr_bool))
        {
            return false;
        }
        else{
            return true;
        }
    }
}