<?php
require "connection.php";

for ($poules = 1; $poules <= 4; $poules++){
    $stmt = $db_conn->prepare("SELECT * FROM tbl_teams WHERE `poule_id` =$poules");
    $stmt->execute();
    $teams = $stmt->fetchAll();

    $arr_teams_id = array();

    foreach ($teams as $team)
    {
        array_push($arr_teams_id, $team['id']);
    }

    for ($i = 0; $i <= sizeof($arr_teams_id) - 1; $i++){
        for ($c = $i +1; $c <= sizeof($arr_teams_id) - 1; $c++){
            if ($i != $c){
                $stmt = $db_conn->prepare("INSERT INTO tbl_matches (`team_id_a`, `team_id_b`) VALUES (:team_a, :team_b)");
                $stmt->execute(array("team_a" => $arr_teams_id[$i], "team_b" => $arr_teams_id[$c]));
            }
        }
    }
}

header("location: ../public/admin/admindex.php");


