<?php require '../templates/admheader.php'?>

    <div class="main-content">
        <div class="container">
            <form action="../../app/match_display.php" method="post" class="form-horizontal col-md-2">
                <div class="form-group">
                    <label for="first" class="control-label">Eerste helft duurt:</label>
                    <input type="number" id="first" name="first" placeholder="30" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pause" class="control-label">Pauze duurt:</label>
                    <input type="number" id="pause" name="pause" placeholder="15" class="form-control">
                </div>
                <div class="form-group">
                    <label for="second" class="control-label">Twede helft duurt:</label>
                    <input type="number" id="second" name="second" placeholder="30" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" value="Inloggen" class="form-control btn btn-primary">
                </div>

            </form>
        </div>
    </div>

<?php require '../templates/footer.php';