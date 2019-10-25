<?php


class ShopProduct
{
    public $title = "Стандартный товар";
    public $producerMainName = "Фамилия автора";
    public $producerFirstName = "Имя автора";
    public $price = 0;

    public function getProducer()
    {
        return $this->producerFirstName . " " . $this->producerMainName;
    }
}
