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
        if(!empty($p1))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}