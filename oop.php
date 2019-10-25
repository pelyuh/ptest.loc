<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

require_once 'app/classes/classes.php';

$product1 = new ShopProduct("Собачье сердце", "Булгаков", "Михаил", 5.99);

print "Автор: {$product1->getProducer()}\n";
