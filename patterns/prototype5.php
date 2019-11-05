<?php

// Method 1.
class ClassA
{
    public function __construct(ClassA $Prototype = null)
    {
        if (null !== $Prototype) {
            //do something
        }
    }
}

$Prototype = new ClassA();
$NewObject = new ClassA($Prototype);

/*
 * В первом методе в конструктор поступает объект прототип, из которого мы получаем всю необходимую информацию.
 * Недостаток такого метода в том, что мы все равно имеем жесткую привязку к классу. В таком случае паттерн прототип
 * обычно используют совместно с фабричным методом.
 *
 * */


// Method 2
class ClassB
{
    /**
     * This function return new object
     *
     * @return ClassB
     */
    public function getClone()
    {
        $object = new ClassB();
        //do something with object
        return $object;
    }
}

$Prototype = new ClassB();
$NewObject = $Prototype->getClone();

/*
 * Во втором методе объект прототип порождает новый объект и сам заполняет его. Может быть использован совместно с
 * первым методом, тогда происходит делегирование прав на передачу состоянию конструктору нового объекта.
 *
 * */

// Method 3
class ClassC
{
    public function __clone()
    {
        //do something
    }
}

$Prototype = new ClassC();
$NewObject = clone $Prototype;

/*
 * Третий метод схож со вторым, за исключением того, что порождение нового объекта происходит встроенными
 * средствами php. Этот метод наиболее предпочтителен, на нем и остановимся
 *
 * */
