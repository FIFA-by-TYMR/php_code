<?php require(realpath(__DIR__) . '/templates/header.php');
require "../app/connection.php";
?>
<!--    ///////////////////////////////BRON: https://codepen.io///////////////////////////-->

<div class="main-content">
    <div class="container wrapper">
        <div class= "play-off col-md-12">
            <ul class="round round-2">
                <li class="spacer">&nbsp;</li>

                <li class="game game-top"><?php echo getTeamByPosition('A1', $db_conn);?></li>
                <li class="game game-spacer">&nbsp;</li>
                <li class="game game-bottom"><?php echo getTeamByPosition('A2', $db_conn);?></li>

                <li class="spacer">&nbsp;</li>

                <li class="game game-top"><?php echo getTeamByPosition('A3', $db_conn);?></li>
                <li class="game game-spacer">&nbsp;</li>
                <li class="game game-bottom"><?php echo getTeamByPosition('A4', $db_conn);?></li>

                <li class="mid-spacer">&nbsp;</li>

                <li class="game game-top "><?php echo getTeamByPosition('A5', $db_conn);?></li>
                <li class="game game-spacer">&nbsp;</li>
                <li class="game game-bottom"><?php echo getTeamByPosition('A6', $db_conn);?></li>

                <li class="spacer">&nbsp;</li>

                <li class="game game-top"><?php echo getTeamByPosition('A7', $db_conn);?></li>
                <li class="game game-spacer">&nbsp;</li>
                <li class="game game-bottom"><?php echo getTeamByPosition('A8', $db_conn);?></li>

                <li class="spacer">&nbsp;</li>
            </ul>

            <ul class="round round 3">
                <li class="spacer">&nbsp;</li>

                <li class="game game-top"><?php echo getTeamByPosition('B1', $db_conn);?></li>
                <li class="game game-spacer">&nbsp;</li>
                <li class="game game-bottom "><?php echo getTeamByPosition('B2', $db_conn);?></li>

                <li class="spacer">&nbsp;</li>

                <li class="game game-top "><?php echo getTeamByPosition('B3', $db_conn);?></li>
                <li class="game game-spacer">&nbsp;</li>
                <li class="game game-bottom"><?php echo getTeamByPosition('B4', $db_conn);?></li>

                <li class="spacer">&nbsp;</li>
            </ul>
            <ul class="round round 4">
                <li class="spacer">&nbsp;</li>

                <li class="game game-top"><?php echo getTeamByPosition('C1', $db_conn);?></li>
                <li class="game game-spacer">&nbsp;</li>
                <li class="game game-bottom"><?php echo getTeamByPosition('C2', $db_conn);?></li>

                <li class="spacer">&nbsp;</li>

            </ul>

            <ul class="round">
                <li class="game game-top"><?php echo getTeamByPosition('D1', $db_conn);?></li>
            </ul>
        </div>

        <?php
        require "../app/poulDisplay.php";
        ?>

    </div>

</div>

<?php require(realpath(__DIR__) . '/templates/footer.php');

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
