<?php

namespace Test\CodeInBB;

use CodeInBB\Car;
use PHPUnit\Framework\TestCase;

class CarTest extends TestCase
{

    /**
     * @var Car
     */
    private $car;

    public function setup()
    {
        $this->car = new Car();
    }

    public function testIsACar()
    {
        $this->assertInstanceOf(Car::class, $this->car);
    }


    public function testAccessToYearOfProductionProperty()
    {
        $this->car->yearOfProduction = 2018;

        $this->assertEquals(2018, $this->car->yearOfProduction);
    }

    /**
     *
     * @expectedException \Error
     * @expectedExceptionMessage Cannot access private property CodeInBB\Car::$registrationNumber
     */
    public function testNoAccessToRegistrationNumberProperty()
    {
        $this->car->registrationNumber = 'SB 12345';

        $this->assertEquals('SB 12345', $this->car->registrationNumber);
    }

    public function testCarNumberRegistration()
    {
        $this->car->register('SB 12345');

        $this->assertEquals('SB 12345', $this->car->getRegNumber());
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage Expected minimum 5 signs
     */
    public function testRegistrationMinimalLength()
    {
        $this->car->register('SB');
    }
}