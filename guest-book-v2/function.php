<?php

function save_content() {
  $str = $_POST['guest-name'] . "|" . $_POST['guest-content'] . "|" .
    date('d-m-Y H:i:s') . "\n*-*\n";
  file_put_contents(FILE_BOOK, $str, FILE_APPEND);
}

function get_messages() {
  return file_get_contents(FILE_BOOK);
}

function array_messages($messages) {
  $messages = explode("\n*-*\n", $messages);
  array_pop($messages);
  return array_reverse($messages);
}

function get_format_message($message) {
  return explode( '|', $message);
}

function print_array($arr) {
  echo '<pre>' . print_r($arr, TRUE) . '</pre>';
}