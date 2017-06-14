<?php
require "connection.php";
require "poulePoints.php";


for ($poule_id = 0; $poule_id <= 4; $poule_id++)
{
    $stmt = $db_conn->prepare("SELECT * FROM tbl_teams WHERE `poule_id` = $poule_id");
    $stmt->execute();
    $teams = $stmt->fetchAll();

    if ($poule_id == 1 || $poule_id == 2 || $poule_id == 3 || $poule_id == 4){
        echo '<div class="col-md-6">
            <h2 class="text-center">Poule '.$poule_id.'</h2>
            <table class="table">
                <thead>
                <tr>
                    <th>Team</th>
                    <th>Gewonnen</th>
                    <th>Gelijk</th>
                    <th>Verloren</th>
                    <th>Punten</th>
                </tr>
                </thead>
                <tbody>';
        foreach ($teams as $team) {

            $arr_score  = PointCounter($team['id'], $db_conn);

            echo '
                <tr>
                    <td>'.$team['name'].'</td>
                    <td>'.$arr_score['win'].'</td>
                    <td>'.$arr_score['draw'].'</td>
                    <td>'.$arr_score['lose'].'</td>
                    <td>'.$arr_score['score'].'</td>
                </tr>
                ';
        }
        echo '</tbody>
            </table>
        </div>';
    }


}
