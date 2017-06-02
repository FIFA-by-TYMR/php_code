<?php
session_start();

require "connection.php";
require "validateScore.php";

$validate = new app\validateScore();

$arr_score = array();
foreach ($_POST as $item)
{
    array_push($arr_score, $item);
}
if ($validate->validateNumberMinus($arr_score[0], $arr_score[1]) == true){
    if ($validate->validateNumberIsNumber($arr_score[0], $arr_score[1]) == true)
    {
        foreach ($_SESSION['matchSelect'] as $match){
            $stmt = $db_conn->prepare("UPDATE `tbl_matches` SET `score_team_a` = :teama, `score_team_b` = :teamb WHERE id = :id AND`team_id_a` = :team_id_a AND `team_id_b` = :team_id_b");
            $stmt->execute(array("id" => $match['id'], "teama" => $arr_score[0], "teamb" => $arr_score[1], "team_id_a" => $match['team_id_a'], "team_id_b" => $match['team_id_b']));
        }
        $_SESSION['success'] = "Score is aangepast voor volgende match: ".$match['team_a']. " VS " . $match['team_b'];
    }
    else{
        $_SESSION['error'] = "Score moet een nummer zijn";
    }
}
else
{
    $_SESSION['error'] = "Je hebt geen geldige score ingevoerd. Score mag geen - bevaten ";
}


unset($_SESSION['matchSelect']);

header("location: ../public/admin/addresult.php");