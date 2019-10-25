<?php

class Connection
{
    public static function make()
    {
        return $db = new PDO('mysql:host=localhost;dbname=lesson_di', 'root', 'root');
    }
}
