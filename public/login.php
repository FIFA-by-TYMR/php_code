<?php
    session_start();
    if (isset($_SESSION['logedIn']))
    {
        header("location: ../public/admin/admindex.php");
    }
    else
    {
        require(realpath(__DIR__) . '/templates/header.php');
    }
?>
    <div class="container wrapper">
        <?php
        if(isset($_SESSION['error']))
        {
            echo '<div class="error text-center alert-danger">' . $_SESSION['error'] . '</div>';
            unset($_SESSION['error']);
        }
        if(isset($_SESSION['logedIn']))
        {
            echo "<div class='logedin text-center alert-success'>" . $_SESSION['logedIn'] . "</div>";
        }
        if(!isset($_SESSION['logedIn']))
        {
            echo '';
        }
        ?>
        <form action="../app/login.php" method="post" class="form-horizontal col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="Email" class="control-label">Email</label>
                <input type="email" id="Email" name="email" placeholder="voorbeeld@hotmail.nl" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Pass" class="control-label">Wachtwoord</label>
                <input type="password" id="Pass" name="pass" placeholder="" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Inloggen" class="form-control btn btn-primary">
            </div>
            
        </form>
    </div>

<?php require(realpath(__DIR__) . '/templates/footer.php');