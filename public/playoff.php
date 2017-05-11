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

        <!-- site's main content goes here -->


    </div>

<?php require(realpath(__DIR__) . '/templates/footer.php');
