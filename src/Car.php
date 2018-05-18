<?php

declare(strict_types=1);

namespace CodeInBB;

class Car
{

    private const ENGINE_ON = 'on';
    private const ENGINE_OFF = 'off';

    /**
     * @var string
     */
    private $registrationNumber;

    /**
     * @var \DateTime
     */
    private $dateOfProduction;

    /**
     * @var string
     */
    private $engineStatus = self::ENGINE_OFF;

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

    public function isEngineOn(): bool
    {
        return $this->engineStatus === self::ENGINE_ON;
    }

    public function turnEngineOn(): void
    {
        $this->engineStatus = self::ENGINE_ON;
    }

    public function turnEngineOff(): void
    {
        $this->engineStatus = self::ENGINE_OFF;
    }


}
