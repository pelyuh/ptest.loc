<?php
$db = mysqli_connect('localhost', 'root', '111', 'guest_book');

if ($db != FALSE) {
  mysqli_set_charset($db, 'utf8');
}
else {
  echo "Не удалось подключится в базе данных";
}
