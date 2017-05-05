<?php
/**
 * Created by PhpStorm.
 * User: Iwan
 * Date: 21-3-2017
 * Time: 16:25
 */

namespace app;


class Validate
{
    protected $email;
    protected $password;


    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function validate($email, $password)
    {
        if( filter_var($email, FILTER_VALIDATE_EMAIL) && $password != '')
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}