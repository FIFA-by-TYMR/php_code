<?php

require_once "connection.php";

$stmt = $db_conn->prepare("SELECT team_a.name as `team_a`, team_b.`name` as `team_b`, `start_time` 
FROM `tbl_matches` m 
LEFT JOIN `tbl_teams` team_a ON (team_a.id = m.team_id_a)
LEFT JOIN `tbl_teams` team_b ON (team_b.id = m.team_id_b)
");
$stmt->execute();
$matches = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($matches as $match)
        {
            echo
                "<tr>
                    <th class=\"text-center\">" . $match['team_a'] ."</th>
                    <th class=\"text-center\">". $match['start_time']."</th>
                    <th class=\"text-center\">" . $match['team_b'] ."</th>
                 </tr>";
        }

