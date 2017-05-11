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

    <div class="main-content">

        <div class="container">
            <?php require "../app/match_display.php"; ?>
        </div>


    </div>

<?php require(realpath(__DIR__) . '/templates/footer.php');
