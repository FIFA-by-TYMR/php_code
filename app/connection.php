<?php

try{
    $db_conn = new PDO('mysql:host=localhost;dbname=worms','root','');
}catch(PDOException $e)
{
    echo "Error: " . $e->getCode();
}