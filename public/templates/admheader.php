<!--This header is just a suggestion. Do whatever you want with it!-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project Fifa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<header>
    <div class="container">
        <div class="logo">
            <a href="index.php"> <img src="./assets/img/logo.png" class="img-responsive center-block"> </a>
        </div>
    </div>
</header>

<nav class="navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navigate nav navbar-nav text-center">
                <li><a href="../admin/addteam.php">Team Toevoegen</a></li>
                <li><a href="../admin/addresult.php">Resultaat Toevoegen</a></li>
                <li><a href="../admin/export.php">Exporteren</a></li>
            </ul>
            <div class="navigate collapse nav navbar-collapse pull-right" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="../../app/login.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>