<?php

function db_insert() {
  global $db;
  $author = mysqli_real_escape_string($db, $_POST['guest-name']);
  $review = mysqli_real_escape_string($db, $_POST['guest-content']);

  $db_insert
    = "INSERT INTO content(author, review) VALUES ('$author', '$review')";
  mysqli_query($db, $db_insert);
}

function bd_select() {
  global $db;
  $bd_select = "SELECT author, review, date FROM content ORDER BY id DESC";

  $arr_messages = mysqli_fetch_all(mysqli_query($db, $bd_select), MYSQLI_ASSOC);
  return $arr_messages;
}