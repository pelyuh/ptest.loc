<?php

/*
 * ООП -  абстрактный класс, метод
 *
 * Как правило, абстрактном классе должен содержаться по меньшей мере
 * один абстрактный метод. Как абстрактный класс, он объявляется с помощью
 * ключевого слова abstract. Абстрактный метод не может быть реализован в аб­
 * страктном классе. Он объявляется как обычный метод, но объявление заверша­
 * ется точкой запятой, не телом метода. Добавим абстрактный метод write ()
 * в класс ShopProductWriter следующим образом:
 * */

require_once 'app/oop2/ShopProduct.php';

abstract class ShopProductWriter
{
    protected $products = [];

    public function addProduct(ShopProduct $shopProduct)
    {
        $this->products[] = $shopProduct;
    }

    abstract public function write();
}
