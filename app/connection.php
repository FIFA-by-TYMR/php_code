<?php

try{
    $db_conn = new PDO('mysql:host=localhost;dbname=project_fifa','root','');
}catch(PDOException $e)
{
    echo "Error: " . $e->getCode();
}