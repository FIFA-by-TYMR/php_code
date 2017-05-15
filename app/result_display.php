<?php

require_once "connection.php";

$stmt = $db_conn->prepare("SELECT team_a.name as `team_a`, team_b.`name` as `team_b`, score_team_a as `score_a` , score_team_b as `score_b` 
FROM `tbl_matches` m 
LEFT JOIN `tbl_teams` team_a ON (team_a.id = m.team_id_a)
LEFT JOIN `tbl_teams` team_b ON (team_b.id = m.team_id_b)

");
$stmt->execute();
$matches = $stmt->fetchAll(PDO::FETCH_ASSOC);


// Set date of the tournament:
$date = new DateTime('2017-06-30');

//Set time when the matches need to begin:
$date->setTime(8, 00);

//Set the display mode now is(Hour - Min)
$tijd = $date->format('H:i');

foreach ($matches as $match)
{
    echo
        "<tr>
                    <th class=\"text-center\">" . $match['team_a'] ."</th>
                    <th class=\"text-center\">". $match['score_a']." - " . $match['score_b']."</th>
                    <th class=\"text-center\">" . $match['team_b'] ."</th>
                 </tr>";

    //Change duration of a match
    $date->modify('+25 minutes');

    //Set the display mode now is(Hour - Min)
    $tijd = $date->format('H:i');

}

