<?php

$driver  = 'mysql';
$host    = 'localhost';
$db_name = 'guest_book';
$db_user = 'root';
$db_pass = '111';
$charset = 'utf8';
$option  = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
  $pdo = new PDO(
    "$driver:host=$host; dbname=$db_name; charset=$charset",
    $db_user, $db_pass, $option
  );
} catch (PDOException $error) {
  die("Не удалось подключится в базе данных");
}
