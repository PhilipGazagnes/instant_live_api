<?php

include('fragments/sql_connexion_start.php');

$sql = "SELECT * FROM inst_live_calendar_events_categories";
$result = $conn->query($sql);

$events = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $events[] = $row;
    }
}
echo json_encode($events);

include('fragments/sql_connexion_close.php');

?>