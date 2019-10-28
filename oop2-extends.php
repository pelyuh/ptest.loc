<?php

require_once 'app/oop2/CdProduct.php';
require_once 'app/oop2/BookProduct.php';

/*
 * ООП - Наследование
 *
*/

$cdProduct = new CdProduct("Классическая музыка. Лучшее", "Антонио", "Вивальди", 10.99, 60.33);

$bookProduct = new BookProduct ("Собачье сердце", "Михаил", "Булгаков", 5.99, 500);

echo $cdProduct->getSummaryLine();

echo '<br>';

echo $bookProduct->getSummaryLine();
