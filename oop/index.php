<?php


require_once 'classes/File.php';

$file = new File(__DIR__ . '/text.txt');


$file->write('Рядок 1');
$file->write('Рядок 2');
$file->write('Рядок 3');
$file->write('Рядок 4');
$file->write('Рядок 5');
$file->write('Рядок 6');
$file->write('Рядок 7');
