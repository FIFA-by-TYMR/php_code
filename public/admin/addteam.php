<?php require '../templates/admheader.php'?>

    <div class="main-content">

        <div class="container">
            <div class="col-md-8">
                <?php
                session_start();
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
            </div>
        </div>

        <div class="container">
            <form action="../../app/addteam.php" method="post" class="form-horizontal col-md-8">
                <div class="form-group">
                    <label for="Team" class="control-label">Team Naam</label>
                    <input type="text" id="Team" name="teamname" placeholder="Ajax" class="form-control" required>
                </div>
                <div class="form-group form-inline">
                    <label for="P1" class="control-label">Speler 1</label>
                    <input type="text" id="P1" name="p[1][0]" placeholder="Student ID" class="form-control" required>
                    <input type="text" id="P1" name="p[1][1]" placeholder="Voornaam" class="form-control"required>
                    <input type="text" id="P1" name="p[1][2]" placeholder="Achternaam" class="form-control" required>
                </div>
                <div class="form-group form-inline">
                    <label for="P2" class="control-label">Speler 2</label>
                    <input type="text" id="P2" name="p[2][0]" placeholder="Student ID" class="form-control" required>
                    <input type="text" id="P2" name="p[2][1]" placeholder="Voornaam" class="form-control" required>
                    <input type="text" id="P2" name="p[2][2]" placeholder="Achternaam" class="form-control" required>
                </div>
                <div class="form-group form-inline">
                    <label for="P3" class="control-label">Speler 3</label>
                    <input type="text" id="P3" name="p[3][0]" placeholder="Student ID" class="form-control" required>
                    <input type="text" id="P3" name="p[3][1]" placeholder="Voornaam" class="form-control" required>
                    <input type="text" id="P3" name="p[3][2]" placeholder="Achternaam" class="form-control" required>
                </div>
                <div class="form-group form-inline">
                    <label for="P4" class="control-label">Speler 4</label>
                    <input type="text" id="P4" name="p[4][0]" placeholder="Student ID" class="form-control" required>
                    <input type="text" id="P4" name="p[4][1]" placeholder="Voornaam" class="form-control" required>
                    <input type="text" id="P4" name="p[4][2]" placeholder="Achternaam" class="form-control" required>
                </div>
                <div class="form-group form-inline">
                    <label for="P5" class="control-label">Reserve Speler</label>
                    <input type="text" id="P5" name="p[5][0]" placeholder="Student ID" class="form-control" required>
                    <input type="text" id="P5" name="p[5][1]" placeholder="Voornaam" class="form-control" required>
                    <input type="text" id="P5" name="p[5][2]" placeholder="Achternaam" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="submit" value="Team Toevoegen" class="form-control btn btn-primary">
                </div>

            </form>

            <div class="col-md-4">
                <h3 class="text-center">Team Lijst</h3>
            <?php
                require "team-display.php";
            ?>
            </div>
        </div>


    </div>


<?php require '../templates/footer.php';