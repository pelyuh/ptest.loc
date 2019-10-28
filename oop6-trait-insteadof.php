<?php

/*
 * Безусловно, сочетать трейты интерфейсами замечательно, но рано или
 * поздно может возникнуть конфликт имен. Что, например, произойдет, если
 * обоих включаемых трейтах будет реализован метод calculateTax (), как по­
 * казано ниже?
 * */


abstract class Service
{
    // Базовый класс для службы
}

trait TaxTools
{
    function calculateTax(float $price): float
    {
        return 222;
    }
}

trait PriceUtilities
{
    private $taxrate = 17;

    public function calculateTax(float $price): float
    {
        return (($this->taxrate / 100) * $price);
    }

    // другие служебные методы
}


/*
 * Чтобы применять директивы оператором use, необходимо дополнить их
 * блоком кода фигурных скобках, где употребляется ключевое слово insteadof.
 * Слева от этого ключевого слова указывается полностью определенное имя ме­
 * тода, состоящее из имени трейта метода. Оба имени разделяются двумя двое­
 * точиями, играющими данном случае роль операции для определения области
 * видимости. А справа от ключевого слова insteadof указывается имя трейта,
 * метод которого аналогичным именем должен быть заменен. Таким образом,
 * конструкция
 *
 * TaxTools::calculateTax insteadof Priceutilities;
 *
 * означает, что метод calculateTax () из трейта TaxTools следует использо­
 * вать вместо одноименного метода из трейта Priceutilities.
 * Поэтому в результате выполнения приведенного выше кода будет выведено
 * число 222, жестко закодированное теле метода TaxTools: : calculateTax ()
 *
 * */



class UtilityService extends Service
{
    use PriceUtilities, TaxTools {
        TaxTools::calculateTax insteadof PriceUtilities;
    }
}

$u = new UtilityService();
print $u->calculateTax(00) . "<br />\n";
