<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css" crossorigin="anonymous">

  <title>Blog</title>
</head>

<body>


  <?php
  require_once("menu.php");
  session_start();
  if (!isset($_SESSION['login'])) {
    echo "<h1>Error! You're not logged in.</h1>";
    renderLoggedOutMenu();
    echo "<h2>Redirecting...</h2>";
    header("Refresh: 2; URL='login.php'");
  } else {
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

</body>

</html>