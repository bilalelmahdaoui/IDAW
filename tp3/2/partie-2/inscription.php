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

  <h1>Register</h1>
  <form id="login_form" action="registering.php" method="POST">
    <table>
      <tr>
        <th>Login :</th>
        <td><input type="text" name="login"></td>
      </tr>
      <tr>
        <th>Mot de passe :</th>
        <td><input type="password" name="password"></td>
      </tr>
      <tr>
        <th></th>
        <td><input type="submit" value="Créer un compte..." /></td>
      </tr>
    </table>
  </form>

  <?php
  require_once("menu.php");
  renderLoggedOutMenu();
  ?>

</body>

</html>