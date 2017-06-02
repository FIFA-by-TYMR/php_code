<?php require '../templates/admheader.php';
    session_start();
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
        </div>
    </div>

<?php require '../templates/footer.php';