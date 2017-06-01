<?php
session_start();

foreach ($_SESSION['matchSelect'] as $match){
    var_dump($match);
    die();
}
