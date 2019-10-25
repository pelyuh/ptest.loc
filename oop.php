<?php

require_once 'app/classes/classes.php';

$product1 = new ShopProduct();

$product1->title = "Собачье сердце";
$product1->producerMainName = "Булгаков";
$product1->producerFirstName = "Михаил";
$product1->price = 5.99;

print "Автор: {$product1->getProducer()}\n";
