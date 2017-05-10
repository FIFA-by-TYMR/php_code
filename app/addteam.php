<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
    session_destroy();
    header('location: ../public/index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once "connection.php";
    require_once("ValidateAddTeam.php");

    $team = $_POST['teamname'];

    $validate = new app\ValidateAddTeam();

    if ($validate->validateteam($team) == true) {
        $stmt = $db_conn->prepare("SELECT `name` FROM tbl_teams WHERE `name` = :name");
        $stmt->execute(array("name" => $team));

        if ($stmt->rowCount() == 0) {

            $arr_bool = array();
            foreach ($_POST['p'] as $player) {
                if ($validate->validateplayer($player)) {
                    array_push($arr_bool, true);
                } else {
                        array_push($arr_bool, false);
                    $_SESSION['error'] = "Je hebt geen geldige speler naam of id ingevoerd";
                }
            }
            if ($validate->validateArray($arr_bool) == true)
            {
                $stmt = $db_conn->prepare("INSERT INTO tbl_teams (poule_id, `name`) VALUES (:poule_id, :name)");
                $stmt->execute(array("poule_id" => 1, "name" => $team));

                $stmt = $db_conn->prepare("SELECT id FROM tbl_teams WHERE `name` = :teamname");
                $stmt->execute(array("teamname" => $team));
                $teamname = $stmt->fetch();

                foreach ($_POST['p'] as $player)
                {
                    $stmt = $db_conn->prepare("INSERT INTO tbl_players (student_id, team_id, first_name, last_name) VALUES (:student_id, :team_id, :first_name, :last_name)");
                    $stmt->execute(array("student_id" => $player[0], "team_id" => $teamname[0], "first_name" => $player[1], "last_name" => $player[2]));
                    $_SESSION['error'] = "Team Toegevoegd";
                }
            }
        }
        else
        {
            $_SESSION['error'] = "Deze team bestaat al.";
        }
    }
    else{
        $_SESSION['error'] = "Je hebt geen geldige teamnaam ingevoerd.";
    }
    header("location: ../public/admin/addteam.php");
}
