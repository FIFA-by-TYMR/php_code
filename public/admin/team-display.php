<?php
require ("../../app/connection.php");

$stmt = $db_conn->prepare("SELECT name FROM tbl_teams WHERE `deleted_at` IS NULL");
$stmt->execute();
$userAll = $stmt->fetchAll();

foreach ($userAll as $name)
{
    echo "<p class='text-center'>" . $name['name'] . "</p>";
}


