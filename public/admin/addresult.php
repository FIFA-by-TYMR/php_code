<?php require '../templates/admheader.php';
    session_start();
    require "../../app/connection.php";
?>

    <div class="main-content">
        <div class="container wrapper">
            <div class="col-md-8 col-md-offset-2">
                <?php
                if(isset($_SESSION['error']))
                {
                    echo '<div class="text-center alert-danger">' . $_SESSION['error'] . '</div>';
                    unset($_SESSION['error']);
                }
                if(isset($_SESSION['success']))
                {
                    echo '<div class="text-center alert-success">' . $_SESSION['success'] . '</div>';
                    unset($_SESSION['success']);
                }
                ?>
                <form action="../../app/matchSelect.php" method="post" class="addresult">
                    <div class="form-group col-md-10">
                        <select name="match" id="Match" class="form-control match_select">
                            <?php
                                //Load matches that are played
                                require "../../app/selectMatches.php";
                            ?>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <input type="submit" value="Selecteren" class="btn btn-primary">
                    </div>
                </form>
            </div>
            <?php
                if (isset($_SESSION['matchSelect']))
                {
                    require "../../app/matchScore.php";
                }
                else
                {
                    echo "";
                }
            ?>
            <form action="../../app/saveFinales.php" method="post" class="col-md-12">
                <div class= "play-off">
                        <ul class="round round-2">
                            <li class="spacer">&nbsp;</li>

                            <li class="game game-top">
                                    <?php
                                        if (getTeamByPosition('A1', $db_conn) == 'Team')
                                        {
                                            echo '<select name="A1"> <option selected="selected" value="NULL">Selecteer Team</option>';
                                            foreach (getTeams($db_conn) as $team){
                                                echo '
                                                    <option value="'.$team['id'].'">'.$team['name'].'</option>';
                                            }
                                            echo '</select>';
                                        }
                                        else
                                        {
                                            echo getTeamByPosition('A1', $db_conn);
                                        }
                                    ?>
                                </li>
                            <li class="game game-spacer">&nbsp;</li>
                            <li class="game game-bottom"><?php
                                if (getTeamByPosition('A2', $db_conn) == 'Team')
                                {
                                    echo '<select name="A2"> <option selected="selected" value="NULL">Selecteer Team</option>';
                                    foreach (getTeams($db_conn) as $team){
                                        echo '\
                                                    <option value="'.$team['id'].'">'.$team['name'].'</option>';
                                    }
                                    echo '</select>';
                                }
                                else
                                {
                                    echo getTeamByPosition('A2', $db_conn);
                                }
                                ?>
                            </li>

                            <li class="spacer">&nbsp;</li>

                            <li class="game game-top"><?php
                                if (getTeamByPosition('A3', $db_conn) == 'Team')
                                {
                                    echo '<select name="A3"><option selected="selected" value="NULL">Selecteer Team</option>';
                                    foreach (getTeams($db_conn) as $team){
                                        echo '\
                                                    <option value="'.$team['id'].'">'.$team['name'].'</option>';
                                    }
                                    echo '</select>';
                                }
                                else
                                {
                                    echo getTeamByPosition('A3', $db_conn);
                                }
                                ?></li>
                            <li class="game game-spacer">&nbsp;</li>
                            <li class="game game-bottom"><?php
                                if (getTeamByPosition('A4', $db_conn) == 'Team')
                                {
                                    echo '<select name="A4"><option selected="selected" value="NULL">Selecteer Team</option>';
                                    foreach (getTeams($db_conn) as $team){
                                        echo '\
                                                    <option value="'.$team['id'].'">'.$team['name'].'</option>';
                                    }
                                    echo '</select>';
                                }
                                else
                                {
                                    echo getTeamByPosition('A4', $db_conn);
                                }
                                ?></li>

                            <li class="mid-spacer">&nbsp;</li>

                            <li class="game game-top "><?php
                                if (getTeamByPosition('A5', $db_conn) == 'Team')
                                {
                                    echo '<select name="A5"><option selected="selected" value="NULL">Selecteer Team</option>';
                                    foreach (getTeams($db_conn) as $team){
                                        echo '\
                                                    <option value="'.$team['id'].'">'.$team['name'].'</option>';
                                    }
                                    echo '</select>';
                                }
                                else
                                {
                                    echo getTeamByPosition('A5', $db_conn);
                                }
                                ?></li>
                            <li class="game game-spacer">&nbsp;</li>
                            <li class="game game-bottom"><?php
                                if (getTeamByPosition('A6', $db_conn) == 'Team')
                                {
                                    echo '<select name="A6"><option selected="selected" value="NULL">Selecteer Team</option>';
                                    foreach (getTeams($db_conn) as $team){
                                        echo '\
                                                    <option value="'.$team['id'].'">'.$team['name'].'</option>';
                                    }
                                    echo '</select>';
                                }
                                else
                                {
                                    echo getTeamByPosition('A6', $db_conn);
                                }
                                ?></li>

                            <li class="spacer">&nbsp;</li>

                            <li class="game game-top"><?php
                                if (getTeamByPosition('A7', $db_conn) == 'Team')
                                {
                                    echo '<select name="A7"><option selected="selected" value="NULL">Selecteer Team</option>';
                                    foreach (getTeams($db_conn) as $team){
                                        echo '\
                                                    <option value="'.$team['id'].'">'.$team['name'].'</option>';
                                    }
                                    echo '</select>';
                                }
                                else
                                {
                                    echo getTeamByPosition('A7', $db_conn);
                                }
                                ?></li>
                            <li class="game game-spacer">&nbsp;</li>
                            <li class="game game-bottom"><?php
                                if (getTeamByPosition('A8', $db_conn) == 'Team')
                                {
                                    echo '<select name="A8"><option selected="selected" value="NULL">Selecteer Team</option>';
                                    foreach (getTeams($db_conn) as $team){
                                        echo '\
                                                    <option value="'.$team['id'].'">'.$team['name'].'</option>';
                                    }
                                    echo '</select>';
                                }
                                else
                                {
                                    echo getTeamByPosition('A8', $db_conn);
                                }
                                ?></li>

                            <li class="spacer">&nbsp;</li>
                        </ul>

                        <ul class="round round 3">
                            <li class="spacer">&nbsp;</li>

                            <li class="game game-top"><?php
                                if (getTeamByPosition('B1', $db_conn) == 'Team')
                                {
                                    echo '<select name="B1"><option selected="selected" value="NULL">Selecteer Team</option>';
                                    foreach (getTeams($db_conn) as $team){
                                        echo '\
                                                    <option value="'.$team['id'].'">'.$team['name'].'</option>';
                                    }
                                    echo '</select>';
                                }
                                else
                                {
                                    echo getTeamByPosition('B1', $db_conn);
                                }
                                ?></li>
                            <li class="game game-spacer">&nbsp;</li>
                            <li class="game game-bottom "><?php
                                if (getTeamByPosition('B2', $db_conn) == 'Team')
                                {
                                    echo '<select name="B2"><option selected="selected" value="NULL">Selecteer Team</option>';
                                    foreach (getTeams($db_conn) as $team){
                                        echo '\
                                                    <option value="'.$team['id'].'">'.$team['name'].'</option>';
                                    }
                                    echo '</select>';
                                }
                                else
                                {
                                    echo getTeamByPosition('B2', $db_conn);
                                }
                                ?></li>

                            <li class="spacer">&nbsp;</li>

                            <li class="game game-top "><?php
                                if (getTeamByPosition('B3', $db_conn) == 'Team')
                                {
                                    echo '<select name="B3"><option selected="selected" value="NULL">Selecteer Team</option>';
                                    foreach (getTeams($db_conn) as $team){
                                        echo '\
                                                    <option value="'.$team['id'].'">'.$team['name'].'</option>';
                                    }
                                    echo '</select>';
                                }
                                else
                                {
                                    echo getTeamByPosition('B3', $db_conn);
                                }
                                ?></li>
                            <li class="game game-spacer">&nbsp;</li>
                            <li class="game game-bottom"><?php
                                if (getTeamByPosition('B4', $db_conn) == 'Team')
                                {
                                    echo '<select name="B4"><option selected="selected" value="NULL">Selecteer Team</option>';
                                    foreach (getTeams($db_conn) as $team){
                                        echo '\
                                                    <option value="'.$team['id'].'">'.$team['name'].'</option>';
                                    }
                                    echo '</select>';
                                }
                                else
                                {
                                    echo getTeamByPosition('B4', $db_conn);
                                }
                                ?></li>

                            <li class="spacer">&nbsp;</li>
                        </ul>
                        <ul class="round round 4">
                            <li class="spacer">&nbsp;</li>

                            <li class="game game-top"><?php
                                if (getTeamByPosition('C1', $db_conn) == 'Team')
                                {
                                    echo '<select name="C1"><option selected="selected" value="NULL">Selecteer Team</option>';
                                    foreach (getTeams($db_conn) as $team){
                                        echo '\
                                                    <option value="'.$team['id'].'">'.$team['name'].'</option>';
                                    }
                                    echo '</select>';
                                }
                                else
                                {
                                    echo getTeamByPosition('C1', $db_conn);
                                }
                                ?></li>
                            <li class="game game-spacer">&nbsp;</li>
                            <li class="game game-bottom"><?php
                                if (getTeamByPosition('C2', $db_conn) == 'Team')
                                {
                                    echo '<select name="C2"><option selected="selected" value="NULL">Selecteer Team</option>';
                                    foreach (getTeams($db_conn) as $team){
                                        echo '\
                                                    <option value="'.$team['id'].'">'.$team['name'].'</option>';
                                    }
                                    echo '</select>';
                                }
                                else
                                {
                                    echo getTeamByPosition('C2', $db_conn);
                                }
                                ?></li>

                            <li class="spacer">&nbsp;</li>

                        </ul>

                        <ul class="round">
                            <li class="game game-top"><?php
                                if (getTeamByPosition('D1', $db_conn) == 'Team')
                                {
                                    echo '<select name="D1"><option selected="selected" value="NULL">Selecteer Team</option>';
                                    foreach (getTeams($db_conn) as $team){
                                        echo '\
                                                    <option value="'.$team['id'].'">'.$team['name'].'</option>';
                                    }
                                    echo '</select>';
                                }
                                else
                                {
                                    echo getTeamByPosition('D1', $db_conn);
                                }
                                ?></li>
                        </ul>
                </div>
                <div class="form-group">
                    <input type="submit" value="Play off's opslaan" class="btn btn-success col-md-6 col-md-offset-3">
                </div>

            </form>
            <form action="deleteFinales" method="post" class="col-md-12">
                <input type="submit" value="Finales verwijderen" class="btn btn-danger col-md-6 col-md-offset-3">
            </form>
        </div>
    </div>

<?php require '../templates/footer.php';

function getTeams($db_conn){
    $stmt = $db_conn->prepare("SELECT * FROM `tbl_teams`");
    $stmt->execute();
    $allTeams = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $allTeams;
}


function getTeamByPosition($position, $db_conn)
{
    $stmt = $db_conn->prepare("SELECT * FROM `tbl_finals` INNER JOIN `tbl_teams` ON `tbl_finals`.`team_id`=`tbl_teams`.`id` ");
    $stmt->execute();
    $arr_final = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($arr_final as $final) {
        if ($final['position'] == $position) {
            return $final['name'];
        }
    }
    return 'Team';
}