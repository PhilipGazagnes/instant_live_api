<?php

include('private/sql_connection_params.php');

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');

if ($conn->connect_error) {
  die('Erreur de connexion à la base de données : ' . $conn->connect_error);
}

?>