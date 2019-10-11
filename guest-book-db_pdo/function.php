<?php

function db_insert() {
  global $pdo;
  $author = htmlentities($_POST['guest-name']);
  $review = htmlentities($_POST['guest-content']);


  $pdo->query(
    "INSERT INTO content(author, review) VALUES ('$author', '$review')"
  );
}

function db_select() {
  global $pdo;
  $db_select = $pdo->query("SELECT author, review, date FROM content ORDER BY id DESC");

  $arr_messages = $db_select->fetchAll(PDO::FETCH_ASSOC);
  
  return $arr_messages;
}