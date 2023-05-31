<?php

include('fragments/sql_connexion_start.php');

$name = $_POST['name'];

$sql = "INSERT INTO inst_live_calendar_events_categories (name) VALUES ('$name')";

if ($conn->query($sql) === TRUE) {
    echo 'event category created';
} else {
    echo 'Erreur lors de l\'enregistrement de l\'événement : ' . $conn->error;
}

include('fragments/sql_connexion_close.php');

?>
