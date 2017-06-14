<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
    session_destroy();
    header('location: ../public/index.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once "connection.php";
    require_once("Validate.php");

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $validate = new \app\Validate($email, $pass);

    if ($validate->validate($email, $pass) == true)
    {
        $stmt = $db_conn->prepare("SELECT * FROM tbl_users WHERE email = :email");
        $stmt->execute(array("email" => $email));
        $userAll = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($stmt->rowCount() == 1) {
            if (password_verify($pass, $userAll['pass']))
            {
                $_SESSION['email'] = $email;
                $_SESSION['logedIn'] = "Je bent ingelogd als: " . $email. "!";
                header("location: ../public/admin/admindex.php");
                exit;
            }
            else
            {
                $_SESSION['error'] = "Je hebt een verkeerde email of wachtwoord ingetoetst!";
            }
        }
        if ($stmt->rowCount() == 0) {
            $_SESSION['error'] = "Je hebt een verkeerde email of wachtwoord ingetoetst!";
        }
    } else {
        $_SESSION['error'] = "Je hebt een ongeldige email ingetoets!";
    }
    header("location: ../public/login.php");
}
