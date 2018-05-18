<?php

declare(strict_types=1);

namespace CodeInBB;

class Car
{

    /**
     * @var string
     */
    private $registrationNumber;

    /**
     * @var \DateTime
     */
    private $dateOfProduction;

    public function __construct(\DateTime $yearOfProduction = null)
    {
        if (!$yearOfProduction) {
            $yearOfProduction = new \DateTime('midnight previous monday');
        }

        $this->dateOfProduction = $yearOfProduction;
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

    public function getDateOfProduction(): \DateTime
    {
        return $this->dateOfProduction;
    }


}
