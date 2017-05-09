<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project Fifa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
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
            <ul class="nav navbar-nav">
                <li><a href="index.php" class="navigate">Home</a></li>
                <li><a href="playoff.php">Play Off</a></li>
                <li><a href="match.php">Wedstrijden</a></li>
                <li><a href="result.php">Resultaten</a></li>
            </ul>
            <ul class="nav navbar-nav login">
                <li><a href="login.php" class="pull-right">Inloggen</a></li>
            </ul>
        </div>
    </div>
</nav>