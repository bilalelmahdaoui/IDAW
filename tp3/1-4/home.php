<?php
session_start();

// on simule une base de données
$users = array(
  // login => password
  'riri' => 'fifi',
  'bilalelmahdaoui' => 'helloworld',
  'yoda' => 'maitrejedi'
);

$errorText = "";
$successfullyLogged = false;

if (isset($_SESSION['login'])) {
  $successfullyLogged = true;
}
else if (isset($_POST['login']) && isset($_POST['password'])) {
  $tryLogin = $_POST['login'];
  $tryPwd = $_POST['password'];
  // si login existe et password correspond
  if (array_key_exists($tryLogin, $users) && $users[$tryLogin] == $tryPwd) {
    $successfullyLogged = true;
    $_SESSION['login'] = $tryLogin;
  } else {
    $errorText = "Erreur de login/password!";
  }
} else {
  $errorText = "Erreur! Merci d'utiliser le formulaire de login.";
}

function welcomeUser() {
  echo "<h1>Welcome " . $_SESSION['login'] . "</h1>";
  echo "You are logged in!";
  echo "<nav>
          <ul>
            <li><a href=\"home.php\">Home</a></li>
            <li><a href=\"blog.php\">Blog</a></li>
            <li><a href=\"logout.php\">Logout</a></li>
          </ul>
        </nav>";
}

function showLoginError($errorText) {
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
}
else {
  welcomeUser();
}

?>
