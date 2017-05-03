<?php

/**
 * Created by PhpStorm.
 * User: Danma
 * Date: 3/20/2017
 * Time: 1:35 PM
 */
class ConnectToDatabase1
{

    public $username;
    public $password;
    public $hostname;
    public $db;
    public function __construct($username, $password, $hostname, $database)
    {
        $this->username = $username;
        $this->password= $password;
        $this->hostname = $hostname;
        $this->db = $database;

    }
    public function ConnectSqli(){

        $dbhandle = new mysqli($this->username, $this->password, $this->hostname, $this->db);
        return $dbhandle;
    }
    public function ConnectPDO(){
        $dbhandle = new PDO("mysql:host=$this->hostname;dbname=$this->db", $this->username, $this->password);
        $dbhandle->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $dbhandle;
    }
}
