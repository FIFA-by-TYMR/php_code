<?php

session_start();

require "connection.php";

$selectie = $_POST['match'];

$stmt = $db_conn->prepare("SELECT team_a.name as `team_a`, team_b.`name` as `team_b`, `start_time`, m.id, score_team_a, score_team_b, team_id_a, team_id_b
FROM `tbl_matches` m 
LEFT JOIN `tbl_teams` team_a ON (team_a.id = m.team_id_a)
LEFT JOIN `tbl_teams` team_b ON (team_b.id = m.team_id_b)
WHERE m.`id` =:id ");
$stmt->execute(array("id" => $selectie));
$result = $stmt->fetchAll();

$_SESSION['matchSelect'] = $result;

header("location: ../public/admin/addresult.php");