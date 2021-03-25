<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css" crossorigin="anonymous">
  <title>Register</title>
</head>

<body>
  <?php

  require_once("menu.php");

  $errorText = "";

  if (isset($_POST['login']) && isset($_POST['password'])) {
    $tryLogin = $_POST['login'];
    $tryPwd = $_POST['password'];
    $userAdded = addUserToDb($tryLogin, $tryPwd);

    if ($userAdded) {
      registrationSucceeded($tryLogin);
      //header("Refresh: 2; URL='login.php'");
    } else {
      $errorText = "Erreur! Merci d'esssayer avec autre login.";
      showLoginError($errorText);
    }
  } else {
    $errorText = "Erreur! Merci d'utiliser le formulaire de login.";
    showRegistrationError($errorText);
  }

  function showRegistrationError($errorText)
  {
    echo "<h1>" . $errorText . "</h1>";
    echo "<nav>
          <ul>
            <li><a href=\"login.php\">Login</a></li>
            <li><a href=\"index.php\">Back to Homepage</a></li>
          </ul>
        </nav>";
    echo "<h2>Redirecting...</h2>";
    header("Refresh: 2; URL='inscription.php'");
  }

  function registrationSucceeded($login)
  {
    echo "<h1>Votre Compte '" . $login . "' a été créé avec succès!</h1>";
    renderLoggedOutMenu();
    echo "<h2>Redirecting...</h2>";
    header("Refresh: 2; URL='login.php'");
  }

  function addUserToDb($login, $pwd)
  {
    $servername = "localhost";
    $username = "bilalelmahdaoui";
    $password = "helloworld";
    $dbname = "tpPHPdb";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) die("Erreur de connexion: " . $conn->connect_error);

    $query = "INSERT INTO User (login, password)
            VALUES ('" . $login . "', '" . $pwd . "');";
    //echo $query;

    $userAdded = $conn->query($query);
    $conn->close();
    return $userAdded;
  }
