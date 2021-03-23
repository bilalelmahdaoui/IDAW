<?php
  session_start();
  if (!isset($_SESSION['login'])) {
    echo "<h1>Error! You're not logged in.</h1>
          <nav>
            <ul>
              <li><a href=\"login.php\">Login</a></li>
              <li><a href=\"index.php\">Back to Homepage</a></li>
            </ul>
          </nav>";
    echo "<h2>Redirecting...</h2>";
    header("Refresh: 2; URL='login.php'");
  }
  else {
    echo "<h1>" . $_SESSION['login'] . "'s blog</h1>
          <nav>
            <ul>
              <li><a href=\"home.php\">Home</a></li>
              <li><a href=\"blog.php\">Blog</a></li>
              <li><a href=\"logout.php\">Logout</a></li>
            </ul>
          </nav>";
  }
  
?>