<?php
session_start();
  if (!isset($_SESSION['login'])) {
    echo "<h1>Welcome to our website!</h1>
          <nav>
            <ul>
              <li><a href=\"login.php\">Login</a></li>
            </ul>
          </nav>";
  }
  else {
    echo "<h1>Welcome back to our website!</h1>
          <p>You're already logged in!</p>
          <h2>Redirecting...</h2>";
    header("Refresh: 2; URL='home.php'");
    exit();
    }
?>