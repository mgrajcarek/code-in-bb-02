<?php

declare(strict_types=1);

namespace CodeInBB;

class Car
{

    private $registrationNumber;

    public $yearOfProduction;

    public function register(string $regNumber)
    {
        if (strlen($regNumber) <= 5) {
            throw new \Exception('Expected minimum 5 signs');
        }

        $this->registrationNumber = $regNumber;
    }

    public function getRegNumber(): string
    {
        return $this->registrationNumber;
    }


}
