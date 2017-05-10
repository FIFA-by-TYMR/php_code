<?php

require_once "connection.php";

$stmt = $db_conn->prepare("SELECT * FROM tbl_matches");
$stmt->execute();
$rezult = $stmt->fetchAll();

$stmt = $db_conn->prepare("SELECT `name` FROM tbl_teams WHERE id IN (SELECT `team_id_a` FROM tbl_matches) AND id IN (SELECT `team_id_b` FROM tbl_matches)");
$stmt->execute();
$team_id = $stmt->fetchAll();


var_dump($team_id);
die();


foreach ($rezult as $rez)
{

    foreach ($team_id as $id)
    {

    }
}


