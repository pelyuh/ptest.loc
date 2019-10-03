<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ptest sess secret</title>
</head>
<body>

<ul>
    <li><a href="sess1.php">sess 1</a></li>
    <li><a href="sess2.php">sess 2</a></li>
    <li><a href="sess_secret.php">sess secret</a></li>
</ul>

<?php

session_start();
if ($_GET['do'] AND $_GET['do'] == 'exit') {
    unset($_SESSION['admin']);
};

if (!isset($_SESSION['admin'])) {
  exit('Please login');
}

echo "Welcome, {$_SESSION['admin']} ";

?>
<a href="sess_secret.php?do=exit"> Logout</a>


</body>
</html>