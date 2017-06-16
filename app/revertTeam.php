<?php

session_start();

require "connection.php";

$stmt = $db_conn->prepare("SELECT * FROM tbl_teams WHERE `deleted_at` IS NULL");
$stmt->execute();
$deletedTeams = $stmt->rowCount();

if ($deletedTeams >= 16){
    $_SESSION['error'] = "Je moet eerst een extra team verwijderen om team terug te zetten";
}
else {
    $selectie = $_POST['select_catalog'];

    $stmt = $db_conn->prepare("SELECT `name` FROM tbl_teams WHERE `name` = :naam");
    $stmt->execute(array("naam" => $selectie));
    $result = $stmt->rowCount();

    if ($result == 1) {
        $stmt = $db_conn->prepare("UPDATE tbl_teams SET deleted_at = NULL WHERE `name` = :naam");
        $stmt->execute(array("naam" => $selectie));

        $_SESSION['success'] = "Team Teruggezet!";
    } else {
        $_SESSION['error'] = "De gekozen team bestaat niet!";
    }
}
header("location: ../public/admin/admindex.php");