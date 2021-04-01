<?php
require_once('config.php');

$requete = "SELECT * FROM Utilisateur;";
$result = $mysqli->query($requete);
$users = [];

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $users[] = $row;
  }
  echo json_encode($users);
} else {
  echo "Pas d'utilisateurs";
}
$mysqli->close();
