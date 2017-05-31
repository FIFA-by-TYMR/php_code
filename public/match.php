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
        <div class="container wrapper">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">Team A</th>
                        <th class="text-center">Tijd</th>
                        <th class="text-center">Team B</th>
                    </tr>
                </thead>
                <tbody>
                <?php require "../app/match_display.php"; ?>
                </tbody>
            </table>
        </div>
    </div>

<?php require(realpath(__DIR__) . '/templates/footer.php');
