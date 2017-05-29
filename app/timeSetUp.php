<?php
session_start();
require_once "connection.php";
require "ValidateTime.php";

$first = $_POST['first'];
$pause = $_POST['pause'];
$second = $_POST['second'];

$validate = new \app\ValidateTime();

if ($validate->validateTime($first, $pause, $second) == true)
{
    $count = $first + $pause  + $second;

    $stmt = $db_conn->prepare("SELECT `start_time` FROM tbl_matches");
    $stmt->execute();
    $matches = $stmt->rowCount();

    // Set date of the tournament:
        $date = new DateTime('2017-06-30');

    //Set time when the matches need to begin:
        $date->setTime(8, 00);

    //Set the display mode now is(Hour - Min)
    $tijd = $date->format('Y-m-d H:i:s');

    for ($i = 0; $i <= $matches; $i++)
    {
        $stmt = $db_conn->prepare("UPDATE `tbl_matches` SET `start_time` = :time WHERE `tbl_matches`.`id` = :id");
        $stmt->execute(array("time" => $tijd, "id" => $i));

        //Set the display mode now is(Hour - Min)
        $tijd = $date->format('Y-m-d H:i:s');

        //Hoe much time will be add for one match
        $date->modify('+'.$count.' minutes');
    }
    $_SESSION['success'] = "Tijden zijn aangepast";
}
else{
    $_SESSION['error'] = "Je hebt geen geldige tijd ingevoerd. Tijd mag geen - bevaten ";
}
header("location: ../public/admin/admindex.php");
