<?php

declare(strict_types=1);

namespace CodeInBB;

class Car
{

    private $registrationNumber;
    private $yearOfProduction;

    public function __construct(int $yearOfProduction = null)
    {
        if (!$yearOfProduction) {
            $yearOfProduction = (int) (new \DateTime())->format('Y');
        }

        $this->yearOfProduction = $yearOfProduction;
    }

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

    public function getYearOfProduction(): int
    {
        return $this->yearOfProduction;
    }


}
