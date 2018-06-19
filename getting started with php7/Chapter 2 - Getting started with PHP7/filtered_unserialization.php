<?php

class Car
{
    public function setColor( $color )
    {
        $this->color = $color;
    }
}

class Motorcycle
{
    public function setBrand( $brand ) {
        $this->brand = $brand;
    }
}

$car = new Car();
$car->setColor('black');

$motorcycle = new Motorcycle();
$motorcycle->setBrand('Suzuki');

$serialized = serialize([$car, $motorcycle]);
var_dump($serialized);
#var_dump(unserialize($serialized)); //vulnerability issue called class injection
var_dump(unserialize($serialized, ['allowed_classes' => ['Car']])); //filter unserialization, class Motorcycle will get param PHP_incomplete what will solve object injection problem!