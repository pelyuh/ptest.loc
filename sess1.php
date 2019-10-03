<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ptest sess 1</title>
</head>
<body>
<?php
session_start();
define('ADMIN', 'admin');

if (!empty($_POST['login'])) {
  if ($_POST['login'] === ADMIN) {
    $_SESSION['admin'] = ADMIN;
    $_SESSION['info']  = "You are logged in";
  }
  else {
    $_SESSION['info'] = "Invalid login";
  }
  header('Location: sess1.php');
  exit;
}

if (isset($_SESSION['info'])) {
  echo $_SESSION['info'];
  unset ($_SESSION['info']);
}
?>


<ul>
    <li><a href="sess1.php">sess 1</a></li>
    <li><a href="sess2.php">sess 2</a></li>
    <li><a href="sess_secret.php">sess secret</a></li>
</ul>

<hr>

<form action="" method="post">
    <input type="text" name="login">
    <button type="submit">Login</button>
</form>
</body>
</html>