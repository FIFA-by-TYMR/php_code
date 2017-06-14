<?php

require "connection.php";
require "exportC.php";

$files = glob('csvFiles/*'); //get all file names
foreach($files as $file){
    if(is_file($file))
        unlink($file); //delete file
}

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

if ($matchBool && $playersBool && $teamsBool && $usersBool && $poulesBool){

$match = new exportC('tbl_matches','Matches',$db_conn);
$players = new exportC('tbl_players','Players',$db_conn);
$teams = new exportC('tbl_teams','Teams',$db_conn);
$users = new exportC('tbl_users','Users',$db_conn);
$poules = new exportC('tbl_poules','Poules',$db_conn);
$poules->ColName();
$match->ColName();
$players->ColName();
$teams->ColName();
$users->ColName();
    $files = glob('csvFiles/*.1.csv'); //get all file names

}else{
    if ($matchBool){
        $match = new exportC('tbl_matches','Matches',$db_conn);
        $match->ColName();

    }
    else{

    }
    if ($playersBool){
        $players = new exportC('tbl_players','Players',$db_conn);
        $players->ColName();

    }
    else{

    }
    if ($teamsBool) {
        $teams = new exportC('tbl_teams', 'Teams', $db_conn);
        $teams->ColName();
    }

    else{

    }
    if ($usersBool){
        $users = new exportC('tbl_users','Users',$db_conn);
        $users->ColName();
    }
    else{

    }
    if ($poulesBool){
        $poules = new exportC('tbl_poules','Poules',$db_conn);
        $poules->ColName();
    }
    else{

    }

}
$files = glob('csvFiles/*.1.csv'); //get all file names
foreach($files as $file){
    if(is_file($file))
        unlink($file); //delete file
}

?>
<?php
// Get real path for our folder
$rootPath = realpath('csvFiles');

// Initialize archive object
$zip = new ZipArchive();
$zip->open('sql.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);

// Create recursive directory iterator
/** @var SplFileInfo[] $files */
$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($rootPath),
    RecursiveIteratorIterator::LEAVES_ONLY
);

foreach ($files as $name => $file)
{
    if (!$file->isDir())
    {

        $filePath = $file->getRealPath();
        $relativePath = substr($filePath, strlen($rootPath) + 1);
        $zip->addFile($filePath, $relativePath);
    }
}
$zip->close();

header('Content-Disposition: attachment; filename="sql.zip"');
readfile('sql.zip');
header('location : ../ ');
?>

