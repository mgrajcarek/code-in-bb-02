<?php

declare(strict_types=1);

namespace CodeInBB;

class Car extends Vehicle
{

    private const ENGINE_ON = 'on';
    private const ENGINE_OFF = 'off';

    private static $counter = 0;

    /**
     * @var string
     */
    private $engineStatus = self::ENGINE_OFF;

    public function __construct(\DateTime $dateOfProduction = null)
    {
        self::$counter++;

        parent::__construct($dateOfProduction);
    }

    public function __destruct()
    {
        self::$counter--;
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

    public static function count(): int
    {
        return self::$counter;
    }
}
