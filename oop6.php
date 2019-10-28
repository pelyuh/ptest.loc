<?php

/*
 * ООП - Трейты
 *
 * По существу, трейты напоминают классы, экземпляры которых нельзя полу­
 * чить, но их можно включить другие классы. Поэтому любое свойство (или ме­
 * тод), определенное трейте, становится частью того класса, который включен
 * этот трейт. При этом трейт изменяет структуру данного класса, но не меняет его
 * тип. Трейты можно считать своего рода включениями классы.
 *
 * */

class ShopProduct
{
    private $taxrate = 17;

    // ...

    public function calculateTax(float $price): float
    {
        return (($this->taxrate / 100) * $price);
    }
}

$p = new ShopProduct("Нежное мыло", "",
    "Ванная Боба", 1.33);
print $p->calculateTax(100) . "\n";



/*
 * В приведенном ниже примере кода сначала объявляется простой трейт, со­
 * держащий метод calculateTax (), затем этот трейт включается оба класса:
 * ShopProduct Utilityservice.
 * */

trait PriceUtilities
{
    private $taxrate = 17;

    public function calculateTax(float $price): float
    {
        return (($this->taxrate / 100) * $price);
    }

    // Другие служебные методы
}

class ShopProduct_1
{
    use PriceUtilities;
}


abstract class Service
{
    // Базовый класс для службы
}


class UtilityService extends Service
{
    use PriceUtilities;
}

$p = new ShopProduct();
print $p->calculateTax(100) . "<br />\n";

$u = new UtilityService();
print $u->calculateTax(100) . "<br />\n";


/*
 * В класс можно включить несколько трейтов, перечислив их через запятую по­
 * сле ключевого слова use.
 *
*/

trait IdentityTrait
{
    public function generateId(): string
    {
        return uniqid();
    }
}

class ShopProduct_2
{
    use PriceUtilities, IdentityTrait;
}


$p = new ShopProduct_2();
print $p->calculateTax(100) . "<br />\n";
print $p->generateId() . "<br />\n";
