<?php

include('fragments/sql_connexion_start.php');

$date_time_start = $_POST['date_time_start'];
$date_time_end = $_POST['date_time_end'];

$sql = "SELECT * FROM inst_live_calendar_events";

if ($date_time_start || $date_time_end) {
  $sql = $sql." WHERE";
}

if ($date_time_start) {
  $sql = $sql." date_time_start > '$date_time_start'";
}

if ($date_time_start && $date_time_end) {
  $sql = $sql." AND";
}

if ($date_time_end) {
  $sql = $sql." date_time_end < '$date_time_end'";
}

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