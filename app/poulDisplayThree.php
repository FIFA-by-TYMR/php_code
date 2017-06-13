<?php
require "connection.php";

$stmt = $db_conn->prepare("SELECT * FROM tbl_teams WHERE `poule_id` = 3");
$stmt->execute();
$teams = $stmt->fetchAll();

    foreach ($teams as $team) {
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