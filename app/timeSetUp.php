<?php
session_start();
require_once "connection.php";
require "validateTime.php";

$first = $_POST['first'];
$pause = $_POST['pause'];
$second = $_POST['second'];

$validate = new \app\validateTime();

if ($validate->validateTime($first, $pause, $second) == true)
{
    if ($validate->validateTimeNumber($first,$pause,$second) == true){
        $count = $first + $pause  + $second;

        $stmt = $db_conn->prepare("SELECT `id` FROM tbl_matches ORDER BY `id` ASC");
        $stmt->execute();
        $firstRow = $stmt->fetch();

        $stmt = $db_conn->prepare("SELECT `id` FROM tbl_matches ORDER BY `id` DESC");
        $stmt->execute();
        $lastRow = $stmt->fetch();

        foreach ($firstRow as $firstID)
        {
            $id = (int)$firstID;
            foreach ($lastRow as $lastID)
            {
                $id = (int)$lastID;

                // Set date of the tournament:
                $date = new DateTime('2017-06-30');

                //Set time when the matches need to begin:
                $date->setTime(8, 00);

                //Set the display mode now is(Hour - Min)
                $tijd = $date->format('Y-m-d H:i:s');

                for ($i = $firstID - 1; $i <= $lastID; $i++)
                {
                    $stmt = $db_conn->prepare("UPDATE `tbl_matches` SET `start_time` = :time WHERE `tbl_matches`.`id` = :id AND `tbl_matches`.`score_team_a` IS NULL AND `tbl_matches`.`score_team_b` IS NULL");
                    $stmt->execute(array("time" => $tijd, "id" => $i));

                    //Set the display mode now is(Hour - Min)
                    $tijd = $date->format('Y-m-d H:i:s');

                    //Hoe much time will be add for one match
                    $date->modify('+'.$count.' minutes');
                }
                $_SESSION['success'] = "De tijden zijn aangepast!";
            }
        }
    }
    else{
        $_SESSION['error'] = "je hebt geen geldige nummer ingevuld!";
    }
}
else{
    $_SESSION['error'] = "Je hebt geen geldige tijd ingevoerd. Het mag geen - bevaten!";
}
header("location: ../public/admin/admindex.php");
