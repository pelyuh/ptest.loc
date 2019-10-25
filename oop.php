<?php

require_once 'app/classes/classes.php';

$product1 = new ShopProduct("Собачье сердце", "Булгаков", "Михаил", 5.99);

print "Автор: {$product1->getProducer()}\n";
