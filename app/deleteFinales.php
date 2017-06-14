<?php
require "connection.php";
session_start();

$stmt = $db_conn->prepare("UPDATE `tbl_finals` SET `team_id` = NULL");
$stmt->execute();

$_SESSION['success'] = "De Finales zijn gereset!";

header("location: ../public/admin/addresult.php");