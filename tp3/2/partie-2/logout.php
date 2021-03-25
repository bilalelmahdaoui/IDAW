<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css" crossorigin="anonymous">
  <title>Logging out...</title>
</head>

<body>

  <?php
  session_start();
  if (isset($_SESSION['login'])) {
    echo "<h1>See you later " . $_SESSION['login'] . "!</h1>
          <p>You've successfully logged out!</p>";
    unset($_SESSION["login"]);
  } else {
    echo "<h1>Error! You're not even logged in.</h1>";
  }
  echo "<h2>Redirecting...</h2>";
  header("Refresh: 2; URL='index.php'");
  ?>

</body>

</html>