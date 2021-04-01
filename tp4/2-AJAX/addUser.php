<?php
require_once('config.php');

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

$requete = "INSERT INTO ${tablename} (nom, prenom, date_naissance, remarques) VALUES ('${nom}', '${prenom}', '${date_naissance}', '${remarques}');";

if (!$mysqli->query($requete)) {
  echo ("Erreur: " . $mysqli->error);
} else {
  echo "Ajout avec succès.";
}

$mysqli->close();
