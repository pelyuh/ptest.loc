<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

interface Subject
{
    public function attach(Observer $observer);

    public function detach(Observer $observer);

    public function notify();
}

interface Observer
{
    public function update(Subject $subject);
}

class BBCnews implements Subject
{
    private $observers = [];

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer)
    {
        foreach ($this->observers as $key => $value) {
            if ($value === $observer) {
                unset($this->observers[$key]);
                return;
            }
        }

    }

    public function notify()
    {
        foreach ($this->observers as $value) {
            $value->update($this);
        }
    }
}

class User implements Observer {

    private $userName;

    public function __construct($name)
    {
        $this->userName = $name;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function update(Subject $subject)
    {
        echo "Добрий день {$this->getUserName()}. <br> Надійшли свіжі новини <br><br>";
    }
}


$news = new BBCnews();
$user1 = new User('Рома');
$user2 = new User('Петя');
$user3 = new User('Саша');
$news->attach($user1);
$news->attach($user2);
$news->attach($user3);

$news->notify();