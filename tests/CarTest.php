<?php

namespace Test\CodeInBB;

use CodeInBB\Car;
use PHPUnit\Framework\TestCase;

class CarTest extends TestCase
{

    public function testIsACar()
    {
        $car = new Car();

        $this->assertInstanceOf(Car::class, $car);
    }

}