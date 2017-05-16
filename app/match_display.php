<?php
$team = $_POST['match'];
$first = intval($_POST['first']);
$rest = intval($_POST['pause']);
$second = intval($_POST['second']);
$totalTime = $first+$rest+$second;


$sqlQueryTeam = "SELECT id FROM tbl_matches WHERE id ='$team'";

$date = new DateTime('2017-06-30');
$date->setTime(8, 00);
$tijd = $date->format('H:i');

require_once "connection.php";
//het ophalen van het game id
$gameidq = $db_conn->prepare($sqlQueryTeam);
$gameid =$gameidq->execute();
$result = $gameidq->setFetchMode(PDO::FETCH_ASSOC);
// eind ophalen game id

// het weergeven van de teams en tijden
$stmt = $db_conn->prepare("SELECT * FROM tbl_matches");
$stmt->execute();
$match_row = $stmt->rowCount();

$stmt = $db_conn->prepare("SELECT team_a.name as `team_a`, team_b.`name` as `team_b` 
FROM `tbl_matches` m 
LEFT JOIN `tbl_teams` team_a ON (team_a.id = m.team_id_a)
LEFT JOIN `tbl_teams` team_b ON (team_b.id = m.team_id_b)
");
$stmt->execute();
$matches = $stmt->fetchAll(PDO::FETCH_ASSOC);



    foreach ($matches as $match)
        {


                //Change duration of a match
            $date->modify('+'.$totalTime.' minutes');

            //Set the display mode now is(Hour - Min)
            $tijd = $date->format('H:i');
            echo "<tr>
                    <th class=\"text-center\">" . $match['team_a'] ."</th>
                    <th class=\"text-center\">". $totalTime."</th>
                    <th class=\"text-center\">" . $match['team_b'] ."</th>
                 </tr>";

        }
// eind weergeven teams en tijden
