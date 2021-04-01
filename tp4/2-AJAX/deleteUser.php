<?php
require_once('config.php');

if (isset($_POST['nom'])) {
  $nom = $_POST['nom'];
}
if (isset($_POST['prenom'])) {
  $prenom = $_POST['prenom'];
}

$requete = "DELETE FROM ${tablename} WHERE nom='${nom}' AND prenom='${prenom}';";

if (!$mysqli->query($requete)) {
  echo ("Erreur: " . $mysqli->error);
} else {
  echo "Suppression avec succès!";
}

$mysqli->close();
