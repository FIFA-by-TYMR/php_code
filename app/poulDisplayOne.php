<?php
require "connection.php";
$poule_id = new poulePoints($team['id']);

$stmt = $db_conn->prepare("SELECT * FROM tbl_teams WHERE `poule_id` = 1");
$stmt->execute();
$teams = $stmt->fetchAll();

    foreach ($teams as $team) {

        $poule_id->PointCounter($team['id']);

        echo '
                <tr>
                    <td>'.$team['name'].'</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                ';
}