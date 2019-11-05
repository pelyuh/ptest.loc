<?php

class Sheep
{
    protected $name;
    protected $category;

    public function __construct(string $name, string $category = 'Горная овечка')
    {
        $this->name = $name;
        $this->category = $category;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setCategory(string $category)
    {
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }
}


/*
 * Затем он может быть клонирован следующим образом:
 * */

$original = new Sheep('Джолли');
echo $original->getName(); // Джолли
echo '<br>';
echo $original->getCategory(); // Горная овечка
echo '<br>';

// Клонируем и модифицируем то что нужно
$cloned = clone $original;
$cloned->setName('Долли');
echo $cloned->getName(); // Долли
echo '<br>';
echo $cloned->getCategory(); // Горная овечка