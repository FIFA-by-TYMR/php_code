<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 5/15/2017
 * Time: 3:22 PM
 */
require "connectToDatabase1.php";
$con = new ConnectToDatabase1("root","","localhost","project_fifa");
//<editor-fold desc="handeling of variables">
if (isset($_POST['match']) ){
    $matchBool = $_POST['match'];
}else{
    $matchBool = "off";
}
if (isset($_POST['players'])){
    $playersBool = $_POST['players'];
}
else
{
    $playersBool = "off";
}
if (isset($_POST['teams'])){
    $teamsBool = $_POST['teams'];
}
else
{
    $teamsBool = "off";
}

if (isset($_POST['teams'])){
    $teamsBool = $_POST['teams'];
}
else
{
    $teamsBool = "off";
}
if (isset($_POST['users'])){
    $usersBool = $_POST['users'];
}
else
{
    $usersBool = 'off';
}

if (isset($_POST['poules'])){
    $poulesBool = $_POST['poules'];
}
else
{
    $poulesBool = "off";
}

if ($playersBool == 'on'){
    $playersBool = true;
}
else{
    $playersBool = false;
}
if ($usersBool == 'on'){
    $usersBool = true;
}
else{
    $usersBool = false;
}
if ($teamsBool == 'on'){
    $teamsBool = true;
}
else{
    $teamsBool = false;
}
if ($poulesBool == 'on'){
    $poulesBool = true;
}
else{
    $poulesBool = false;
}
//</editor-fold>

if ($matchBool && $playersBool && $teamsBool && $usersBool){
    $query = "    SELECT `COLUMN_NAME`
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_NAME`='tbl_matches'
INTO OUTFILE '../../../../www/php_code/app/csvFiles/1matches.csv'
    FIELDS TERMINATED BY ','
    ENCLOSED BY ''
    LINES TERMINATED BY ','";
    $matchQuery =   "


SELECT * FROM Tbl_matches
    INTO OUTFILE '../../../../www/php_code/app/csvFiles/Matches.csv'
    FIELDS ESCAPED BY ''
    TERMINATED BY ','
    ENCLOSED BY ''
    LINES TERMINATED BY '\r\n';";
//$matchQuery = "
//select 'id','team_id_a','team_id_b','score_team_a','score_team_b','match_duration' UNION ALL
//SELECT id,team_id_a,team_id_b,score_team_a,score_team_b,match_duration FROM Tbl_matches;
//INTO OUTFILE '../../../../www/php_code/app/csvFiles/Matches.csv'
//";
//
//    $testquery= "SELECT `COLUMN_NAME`
//FROM `INFORMATION_SCHEMA`.`COLUMNS`
//WHERE `TABLE_NAME`='tbl_matches';";
//    $matchQuery =
   $playersQuery = "SELECT * FROM tbl_players
INTO  ../../../www/php_code/app/csvFiles/players.csv ;";

   $teamsQuery =  "SELECT * FROM tbl_teams
OUTPUT TO ../../../../www/php_code/app/csvFiles/teams.csv ;";

  $usersQuery =  "SELECT * FROM tbl_users
 OUTPUT TO../../../../www/php_code/app/csvFiles/users.csvv ;";

    $poulesQuery =  "SELECT * FROM tbl_poules
 OUTPUT TO../../../../www/php_code/app/csvFiles/poules.csv ;";

 $db = $con->ConnectPDO();
 $db->query($query);
 $db->query($matchQuery);
 //$db->query($playersQuery);
// $db->query($teamsQuery);
// $db->query($usersQuery);
// $db->query($poulesQuery);

}else{

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a download="csvFiles/users.csv">users</a>
<a download="csvFiles/teams.csv">teams</a>
<a download="csvFiles/matches.csv">matches</a>
<a download="csvFiles/players.csv">players</a>
<a download="csvFiles/poules.csv">poules</a>

</body>
</html>

