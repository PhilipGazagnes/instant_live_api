<?php

include('fragments/sql_connexion_start.php');

$date_time_start    = $_POST['date_time_start'];
$date_time_end      = $_POST['date_time_end'];
$category_id        = $_POST['category_id'];
$title              = $_POST['title'];
$description        = $_POST['description'];

$sql = "INSERT INTO inst_live_calendar_events (
    date_time_start,
    date_time_end,
    category_id,
    title,
    description
) VALUES (
    '$date_time_start',
    '$date_time_end',
    '$category_id',
    '$title',
    '$description'
)";

if ($conn->query($sql) === TRUE) {
    echo 'event created';
} else {
    echo 'Erreur lors de l\'enregistrement de l\'événement : ' . $conn->error;
}

include('fragments/sql_connexion_close.php');

?>
