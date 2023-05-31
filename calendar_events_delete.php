<?php

include('fragments/sql_connexion_start.php');

$id = $_POST['id'];

$sql = "DELETE FROM inst_live_calendar_events WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
    echo 'event id '.$id.' deleted';
} else {
    echo 'Erreur lors de la suppression de la catégorie : ' . $conn->error;
}

include('fragments/sql_connexion_close.php');

?>
