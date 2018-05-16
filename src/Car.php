<?php

declare(strict_types=1);

namespace CodeInBB;

class Car
{

    private $registrationNumber;

    public $yearOfProduction;

    public function register(string $regNumber)
    {
        $this->registrationNumber = $regNumber;
    }

    public function getRegNumber(): string
    {
        return $this->registrationNumber;
    }


}
