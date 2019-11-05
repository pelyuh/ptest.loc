<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

class origin
{
    private $name;
    private $country;
    private $city;

    function __construct($name, $country, $city)
    {
        $this->name = $name;
        $this->country = $country;
        $this->city = $city;
    }

    function __clone()
    {
        $this->name = 'No name';
        $this->country = 'No country';
        $this->city = 'No city';
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getCountry()
    {
        return $this->country;
    }
}

$origin = new origin('Vitaliy', 'Ukraine', 'Lutsk');
var_dump($origin);

$copyOrigin = clone $origin;
var_dump($copyOrigin);