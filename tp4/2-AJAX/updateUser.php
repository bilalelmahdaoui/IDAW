<?php
require_once('config.php');

if (isset($_POST['ancien_nom'])) {
  $ancien_nom = $_POST['ancien_nom'];
}
if (isset($_POST['ancien_prenom'])) {
  $ancien_prenom = $_POST['ancien_prenom'];
}
if (isset($_POST['nom'])) {
  $nom = $_POST['nom'];
}
if (isset($_POST['prenom'])) {
  $prenom = $_POST['prenom'];
}
if (isset($_POST['date_naissance'])) {
  $date_naissance = $_POST['date_naissance'];
}
if (isset($_POST['remarques'])) {
  $remarques = $_POST['remarques'];
}

$requete = "UPDATE `Utilisateur` SET `nom`='${nom}',`prenom`='${prenom}',`date_naissance`='${date_naissance}',`remarques`='${remarques}' WHERE (prenom = '${ancien_prenom}' AND nom = '${ancien_nom}');";

if (!$mysqli->query($requete)) {
  echo ("Erreur: " . $mysqli->error);
} else {
  echo "Changement avec succès!";
}

$mysqli->close();
