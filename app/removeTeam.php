<?php

require "connection.php";

$stmt = $db_conn->prepare("SELECT `name` FROM tbl_teams WHERE `deleted_at` IS NULL");
$stmt->execute();
$teams = $stmt->fetchAll();

foreach ($teams as $team){
    echo "<option value='".$team['name']."'>" . $team['name'] . "</option>";
}
