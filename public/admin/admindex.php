<?php require '../templates/admheader.php'?>

    <div class="main-content">
        <div class="container wrapper">
            <div class="col-md-12">
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
            <div class="col-md-3">
                <h2 class="text-center">Tijd Aanpassen</h2>
                <form action="../../app/timeSetUp.php" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label for="first" class="control-label">Eerste helft duurt:</label>
                        <input type="number" id="first" name="first" placeholder="30" min="1" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="pause" class="control-label">Pauze duurt:</label>
                        <input type="number" id="pause" name="pause" placeholder="15" min="1" class="form-control"  required>
                    </div>
                    <div class="form-group">
                        <label for="second" class="control-label">Twede helft duurt:</label>
                        <input type="number" id="second" name="second" placeholder="30" min="1" class="form-control"  required>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Tijd veranderen" class="form-control btn btn-primary">
                    </div>
                </form>
            </div>
            <div class="col-md-4 col-md-push-1">
                <h2 class="text-center">Team Verwijderen</h2>
                <form action="../../app/teamRemove.php" method="post">
                    <div class="form-group">
                        <select name="select_catalog" class="form-control">
                            <?php
                            require "../../app/removeTeam.php";
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Verwijderen" class="btn btn-primary form-control">
                    </div>
                </form>
            </div>
            <div class="col-md-3 center-block col-md-push-2">
                <h2 class="text-center">Exporteren</h2>
                <form action="../../app/export.php" method="post" class="form-horizontal col-md-12">
                    <div class="form-group">
                        <label for="matches" class="control-label">Tbl_matches exporteren :</label>
                        <input type="checkbox" id="matches" name="match"  class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="players" class="control-label">tbl_players exporteren:</label>
                        <input type="checkbox" id="players" name="players"  class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="teams" class="control-label">tbl_teams exporteren:</label>
                        <input type="checkbox" id="teams" name="teams"  class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="users" class="control-label">tbl_users exporteren:</label>
                        <input type="checkbox" id="users" name="users"  class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="poules" class="control-label">tbl_poules exporteren:</label>
                        <input type="checkbox" id="poules" name="poules"  class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Downloaden" class="form-control btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php require '../templates/footer.php';