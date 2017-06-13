<?php

class poulePoints
{
    function PointCounter($team_id){

        $arr_score = array(
            'win' => 0,
            'lose' => 0,
            'draw' => 0,
            'score' => 0
        );

        $stmt = $db_conn->prepare("SELECT * FROM tbl_matches WHERE team_id_a = :team_a OR team_id_b = :team_b");
        $stmt->execute(array("team_a" => $team_id, "team_b" => $team_id));
    }
}