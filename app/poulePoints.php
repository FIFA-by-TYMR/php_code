<?php

    function PointCounter($team_id, $db_conn){

        $arr_score = array(
            'win' => 0,
            'lose' => 0,
            'draw' => 0,
            'score' => 0
        );

        $stmt = $db_conn->prepare("SELECT * FROM tbl_matches WHERE team_id_a = :team_a OR team_id_b = :team_b");
        $stmt->execute(array("team_a" => $team_id, "team_b" => $team_id));
        $arr_matches = $stmt->fetchAll();

        foreach ($arr_matches as $match) {
            if ($match['team_id_a'] == $team_id) {
                if ($match['score_team_a'] > $match['score_team_b']) {
                    $arr_score['win'] += 1;
                } elseif ($match['score_team_a'] < $match['score_team_b']) {
                    $arr_score['lose'] += 1;
                } elseif ($match['score_team_a'] == $match['score_team_b'] && $match['score_team_a'] != NULL) {
                    $arr_score['draw'] += 1;
                }
            }
            elseif ($match['team_id_b'] == $team_id) {
                if ($match['score_team_b'] > $match['score_team_a']) {
                    $arr_score['win'] += 1;
                }elseif ($match['score_team_b'] < $match['score_team_a']) {
                    $arr_score['lose'] += 1;
                } elseif ($match['score_team_b'] == $match['score_team_a'] && $match['score_team_b'] != NULL) {
                    $arr_score['draw'] += 1;
                }
            }
        }

        $arr_score['score'] += $arr_score['win'] * 3;
        $arr_score['score'] += $arr_score['draw'] * 1;

        return $arr_score;

    }
