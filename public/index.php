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

    <div class="main-content ">
        <div class="container wrapper">
            <div class="index_IMG">
                <img src="http://wacbeekendonk.nl/wp-content/uploads/2016/05/vriendschappelijk.png" alt="main_IMG" class="img-responsive center-block img-circle">
            </div>
            <div class="index_Beschrijving text-center">
                <p>Wij zijn 4 studenten van het Radius College, wij studeren applicatie en media ontwikkeling. Wat u nu ziet is een van onze vele projecten die we het afgelopen jaar hebben moeten maken.
                </p>
                <p>Dit project genaamd ‘Fifa’ heeft 2 onderdelen, een gaat over een webapp waar je teams kan toevoegen, en wedstrijd info kan zien en het 2e onderdeel is een C# app waar je wedstrijden kan voorspellen en misschien iets kan winnen.
                </p>
                <p>De tijden van de wedstrijden en eventuele informatie zijn allemaal te vinden op de website. De datum is nog niet vastgelegd en word binnenkort geupdate.</p>
            </div>
        </div>
    </div>

<?php require(realpath(__DIR__) . '/templates/footer.php');
