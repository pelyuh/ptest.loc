<?php

/*
 * ООП - Интерфейсы
 *
 * Как известно, абстрактном классе допускается реализация некоторых ме­
 * тодов, не объявленных абстрактными. В отличие от них, интерфейсы — это
 * чистые шаблоны. С помощью интерфейса можно только определить функцио­
 * нальность, но не реализовать ее. Для объявления интерфейса используется клю­
 * чевое слово interface. В интерфейсе могут находиться только объявления, но
 * не тела методов.
 *
 */

interface Chargeable
{
    public function getPrice(): float;
}

class ShopProduct implements Chargeable
{
    // ...
    protected $price;

    // ...

    public function getPrice(): float
    {
        return $this->price;
    }
    // ...
}


/*
 * В классе можно не только расширить суперкласс, но реализовать любое
 * количество интерфейсов. При этом ключевое слово extends должно предше­
 * ствовать ключевому слову implements:
 *
 * */

class Consultancy extends TimedService implements Bookable, Chargeable
{
    public function getPrice(): float
    {
        // TODO: Implement getPrice() method.
    }
}