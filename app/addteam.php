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

    $stmt = $db_conn->prepare("SELECT * FROM tbl_teams WHERE `deleted_at` IS NULL");
    $stmt->execute();
    $rezult = $stmt->rowCount();

    if ($rezult >= 16)
    {
        $_SESSION['error'] = "Je hebt maximale aantal teams bereikt";
    }
    else {

        $team = $_POST['teamname'];

        $validate = new app\ValidateAddTeam();

        if ($validate->validateteam($team) == true) {
            $stmt = $db_conn->prepare("SELECT `name` FROM tbl_teams WHERE `name` = :name");
            $stmt->execute(array("name" => $team));

            if ($stmt->rowCount() == 0) {

                $arr_bool = array();
                $rarr_bool = array();

                foreach ($_POST['p'] as $player) {
                    if ($validate->validateplayer($player)) {
                        array_push($arr_bool, true);
                    } else {
                        array_push($arr_bool, false);
                        $_SESSION['error'] = "Je hebt geen geldige speler naam of id ingevoerd";
                    }
                }
                foreach ($_POST['r'] as $rplayer) {
                    if ($validate->validateReservePlayer($rplayer)) {
                        array_push($rarr_bool, true);
                    } else {
                        array_push($rarr_bool, false);
                    }
                }

                for ($id = 1; $id <= 4;){
                    $stmt = $db_conn->prepare("SELECT `poule_id` FROM tbl_teams WHERE `poule_id` = :id");
                    $stmt->execute(array("id" => $id));
                    $id_count = $stmt->rowCount();
                    if ($id_count != 4)
                    {
                        if ($validate->validateArray($arr_bool) == true) {
                            $stmt = $db_conn->prepare("INSERT INTO tbl_teams (poule_id, `name`) VALUES (:poule_id, :name)");
                            $stmt->execute(array("poule_id" => $id, "name" => $team));

                            $stmt = $db_conn->prepare("SELECT id FROM tbl_teams WHERE `name` = :teamname");
                            $stmt->execute(array("teamname" => $team));
                            $teamname = $stmt->fetch();

                            //Speler toevoegen
                            foreach ($_POST['p'] as $player) {
                                $stmt = $db_conn->prepare("INSERT INTO tbl_players (student_id, team_id, first_name, last_name) VALUES (:student_id, :team_id, :first_name, :last_name)");
                                $stmt->execute(array("student_id" => $player[0], "team_id" => $teamname[0], "first_name" => $player[1], "last_name" => $player[2]));
                            }
                            if ($validate->validateArrayReserve($rarr_bool) == true){
                                //Reserve speller toevoegen
                                foreach ($_POST['r'] as $rplayer) {
                                    $stmt = $db_conn->prepare("INSERT INTO tbl_players (student_id, team_id, first_name, last_name) VALUES (:student_id, :team_id, :first_name, :last_name)");
                                    $stmt->execute(array("student_id" => $rplayer[0], "team_id" => $teamname[0], "first_name" => $rplayer[1], "last_name" => $rplayer[2]));
                                }
                            }
                            $_SESSION['success'] = "Team Toegevoegd";
                            break;
                        }
                    }
                    else
                    {
                        $id++;
                    }
                    if ($id == 4){
                        $_SESSION['error'] = "Je hebt maximale teams per poule bereikt .";
                    }
                }
            } else {
                $_SESSION['error'] = "Deze team bestaat al.";
            }
        }
        else{
            $_SESSION['error'] = "Je hebt geen geldige teamnaam ingevoerd.";
        }
    }
    header("location: ../public/admin/addteam.php");
}
