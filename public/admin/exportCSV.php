<?php require '../templates/admheader.php'?>

    <div class="main-content">
        <div class="container">
            <form action="../../app/export.php" method="post" class="form-horizontal col-md-2">
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


<?php require '../templates/footer.php';