<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css" crossorigin="anonymous">
  <title>Home</title>
</head>

<body>
  <?php
  require_once("menu.php");
  session_start();

  $errorText = "";
  $successfullyLogged = false;

  if (isset($_SESSION['login'])) {
    $successfullyLogged = true;
  } else if (isset($_POST['login']) && isset($_POST['password'])) {
    $tryLogin = $_POST['login'];
    $tryPwd = $_POST['password'];
    $tryUser = getUserFromDb($tryLogin);
    //echo $tryUser["login"] . " - " . $tryUser["password"];
    //print_r($tryUser);
    if ($tryUser != null && $tryUser["login"] == $tryLogin && $tryUser["password"] == $tryPwd) {
      $successfullyLogged = true;
      $_SESSION['login'] = $tryLogin;
    } else {
      $errorText = "Erreur de login/password!";
    }
  } else {
    $errorText = "Erreur! Merci d'utiliser le formulaire de login.";
  }

  function welcomeUser()
  {
    echo "<h1>Welcome " . $_SESSION['login'] . "</h1>";
    echo "You are logged in!";
    renderLoggedInMenu();
  }

  function showLoginError($errorText)
  {
    echo "<h1>" . $errorText . "</h1>";
    echo "<nav>
          <ul>
            <li><a href=\"login.php\">Login</a></li>
            <li><a href=\"index.php\">Back to Homepage</a></li>
          </ul>
        </nav>";
    echo "<h2>Redirecting...</h2>";
    header("Refresh: 2; URL='login.php'");
  }

  if (!$successfullyLogged) {
    showLoginError($errorText);
  } else {
    welcomeUser();
  }

  function getUserFromDb($login)
  {
    //echo "getuserfromdb";
    $servername = "localhost";
    $username = "bilalelmahdaoui";
    $password = "helloworld";
    $dbname = "tpPHPdb";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) die("Erreur de connexion: " . $conn->connect_error);

    $query = "SELECT login, password
            FROM User
            WHERE login = '" . $login . "';";
    //secho $query;
    $result = $conn->query($query);
    $user = $result->fetch_assoc();

    if ($user != null) {
      //echo "hhhhhhhhhh";
      return $user;
    } else {
      //echo "bhhhhhhh";
      return null;
    }
    $conn->close();
  }
