<?php
require "connection.php";
session_start();
foreach ($_POST as $key => $place)
{
    $stmt = $db_conn->prepare("UPDATE `tbl_finals` SET `team_id` = :id WHERE `position` = :position");
    $stmt->execute(array("id" => $place, "position" => $key));
}

$_SESSION['success'] = "Play off's opgeslagen";

header("location: ../public/admin/addresult.php");