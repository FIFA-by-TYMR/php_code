<?php require '../templates/admheader.php';
    session_start();
?>

    <div class="main-content">
        <div class="container wrapper">
            <div class="col-md-8 col-md-offset-2">
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
        </div>
    </div>

<?php require '../templates/footer.php';