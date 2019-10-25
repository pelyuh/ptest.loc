<?php

require_once 'classes/Connection.php';
require_once 'classes/QueryBuilder.php';



$db = new QueryBuilder(Connection::make());

$user = $db->select('user');
$posts = $db->select('posts');

echo '<pre>';
print_r($user);
echo '</pre>';

echo '<pre>';
print_r($posts);
echo '</pre>';