<?php require '../templates/admheader.php'?>

    <div class="main-content">
        <div class="container">
            <div class="col-md-4">
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
                <h2 class="text-center">Tijd Aanpassen</h2>
                <form action="../../app/timeSetUp.php" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label for="first" class="control-label">Eerste helft duurt:</label>
                        <input type="number" id="first" name="first" placeholder="30" class="form-control" min="1" required>
                    </div>
                    <div class="form-group">
                        <label for="pause" class="control-label">Pauze duurt:</label>
                        <input type="number" id="pause" name="pause" placeholder="15" class="form-control" min="1" required>
                    </div>
                    <div class="form-group">
                        <label for="second" class="control-label">Twede helft duurt:</label>
                        <input type="number" id="second" name="second" placeholder="30" class="form-control" min="1" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Tijd veranderen" class="form-control btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php require '../templates/footer.php';