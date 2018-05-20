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
        $this->car = new Car(
            new \DateTime('2010-11-01')
        );
    }

    public function testIsACar()
    {
        $this->assertInstanceOf(Car::class, $this->car);
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

    public function testYearOfProduction()
    {
        $dateOfProduction = new \DateTime('2010-05-01');

        $car = new Car($dateOfProduction);
        $this->assertEquals($dateOfProduction, $car->getDateOfProduction());
    }

    public function testFirstDayOfCurrentWeekAsDefaultDateOfProduction()
    {
        $car = new Car();
        $currentYear = new \DateTime('midnight previous monday');

        $this->assertEquals($currentYear, $car->getDateOfProduction());
    }


    public function testEngineIsByDefaultTurnedOff()
    {
        $this->assertFalse(
            $this->car->isEngineOn()
        );
    }

    public function testTurningEngineOn()
    {
        $this->car->turnEngineOn();

        $this->assertTrue(
            $this->car->isEngineOn()
        );
    }

    public function testTurningEngineOff()
    {
        $this->car->turnEngineOn();
        $this->car->turnEngineOff();

        $this->assertFalse(
            $this->car->isEngineOn()
        );
    }

}