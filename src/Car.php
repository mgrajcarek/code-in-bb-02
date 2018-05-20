<?php

declare(strict_types=1);

namespace CodeInBB;

class Car extends Vehicle
{

    private const ENGINE_ON = 'on';
    private const ENGINE_OFF = 'off';

    /**
     * @var string
     */
    private $engineStatus = self::ENGINE_OFF;

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
