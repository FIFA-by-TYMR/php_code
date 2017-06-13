<?php require(realpath(__DIR__) . '/templates/header.php'); ?>
<!--    ///////////////////////////////BRON: https://codepen.io///////////////////////////-->

<div class="main-content">
    <div class="container wrapper">
        <div class= "play-off col-md-12">
            <ul class="round round-2">
                <li class="spacer">&nbsp;</li>

                <li class="game game-top">Lorem</li>
                <li class="game game-spacer">&nbsp;</li>
                <li class="game game-bottom">Lorem</li>

                <li class="spacer">&nbsp;</li>

                <li class="game game-top">Lorem</li>
                <li class="game game-spacer">&nbsp;</li>
                <li class="game game-bottom">Lorem</li>

                <li class="mid-spacer">&nbsp;</li>

                <li class="game game-top ">Lorem</li>
                <li class="game game-spacer">&nbsp;</li>
                <li class="game game-bottom">Lorem</li>

                <li class="spacer">&nbsp;</li>

                <li class="game game-top">Lorem</li>
                <li class="game game-spacer">&nbsp;</li>
                <li class="game game-bottom">Lorem</li>

                <li class="spacer">&nbsp;</li>
            </ul>

            <ul class="round round 3">
                <li class="spacer">&nbsp;</li>

                <li class="game game-top">Lorem</li>
                <li class="game game-spacer">&nbsp;</li>
                <li class="game game-bottom ">Lorem</li>

                <li class="spacer">&nbsp;</li>

                <li class="game game-top ">Lorem</li>
                <li class="game game-spacer">&nbsp;</li>
                <li class="game game-bottom">Lorem</li>

                <li class="spacer">&nbsp;</li>
            </ul>
            <ul class="round round 4">
                <li class="spacer">&nbsp;</li>

                <li class="game game-top">Lorem</li>
                <li class="game game-spacer">&nbsp;</li>
                <li class="game game-bottom">Lorem</li>

                <li class="spacer">&nbsp;</li>

            </ul>

            <ul class="round">
                <li class="game game-top">Lorem</li>
            </ul>
        </div>
        <div class="col-md-6 poule_up">
            <h2 class="text-center">Poule A</h2>
            <table class="table">
                <thead>
                <tr>
                    <th>Team</th>
                    <th>Gewonnen</th>
                    <th>Gelijk</th>
                    <th>Verloren</th>
                    <th>Punten</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    require "../app/poulDisplayOne.php";
                    ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-6 poule_up">
            <h2 class="text-center">Poule B</h2>
            <table class="table">
                <thead>
                <tr>
                    <th>Team</th>
                    <th>Gewonnen</th>
                    <th>Gelijk</th>
                    <th>Verloren</th>
                    <th>Punten</th>
                </tr>
                </thead>
                <tbody>
                <?php
                require "../app/poulDisplayTwo.php";
                ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-6 poule_down">
            <h2 class="text-center">Poule C</h2>
            <table class="table">
                <thead>
                <tr>
                    <th>Team</th>
                    <th>Gewonnen</th>
                    <th>Gelijk</th>
                    <th>Verloren</th>
                    <th>Punten</th>
                </tr>
                </thead>
                <tbody>
                <?php
                require "../app/poulDisplayThree.php";
                ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-6 poule_down">
            <h2 class="text-center">Poule D</h2>
            <table class="table">
                <thead>
                <tr>
                    <th>Team</th>
                    <th>Gewonnen</th>
                    <th>Gelijk</th>
                    <th>Verloren</th>
                    <th>Punten</th>
                </tr>
                </thead>
                <tbody>
                <?php
                require "../app/poulDisplayFour.php";
                ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<?php require(realpath(__DIR__) . '/templates/footer.php');
