<?php
$style = "style1";
if (isset($_COOKIE['css'])) {
  $style = $_COOKIE['css'];
}
if (isset($_POST['css'])) {
  $style = $_POST['css'];
  setcookie("css", $style, time() + 86400);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css" \>
  <?php echo "<link rel=\"stylesheet\" href=\"" . $style . ".css\">" ?>
  <title>Document</title>
</head>

<body>
  <h1>Select your theme</h1>
  <p>You are currently using the <strong><?php echo $style; ?> theme.</strong></p>
  <form id="style_form" action="index.php" method="POST">
    <select name="css">
      <option value="dark">dark</option>
      <option value="light">light</option>
    </select>
    <input type="submit" value="Apply theme" />
  </form>
</body>

</html>