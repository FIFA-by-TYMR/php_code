<?php require '../templates/admheader.php'?>

    <div class="main-content">
        <div class="container wrapper">
            <div class="col-md-8 col-md-offset-2">
                <form action="">
                    <select name="match" id="Match" class="form-control match_select">
                        <?php
                            //Load matches that are played
                            require "../../app/selectMatches.php";
                        ?>
                    </select>
                </form>
            </div>
            <div class="container">
                <form action="">
                    <div class="form-group col-md-4">
                        <label for="" class="control-label">Team A</label>
                    </div>
                    <div class="form-group col-md-2 scoreinput">
                        <label for="TeamA" class="control-label">Team A</label>
                        <input type="number" id="TeamA" placeholder="30" min="0" class="form-control">
                    </div>
                    <div class="form-group col-md-2 scoreinput">
                        <label for="TeamB" class="control-label">Team B</label>
                        <input type="number" id="TeamB" placeholder="30" min="0" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="" class="control-label">Team B</label>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php require '../templates/footer.php';