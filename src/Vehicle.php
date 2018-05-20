<?php

declare(strict_types=1);

namespace CodeInBB;

abstract class Vehicle implements Drawable {

    /**
     * @var string
     */
    protected $registrationNumber;

    /**
     * @var \DateTime
     */
    protected $dateOfProduction;

    /**
     * @param \DateTime|null $yearOfProduction
     */
    public function __construct(\DateTime $dateOfProduction = null)
    {
        if (!$dateOfProduction) {
            $dateOfProduction = new \DateTime('midnight previous monday');
        }

        $this->dateOfProduction = $dateOfProduction;
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

    public function draw(): string
    {
        $carShape = <<<HEREDOC
                  .
    __  Max       |\
 __/__\___________| \_
|   ___    |  ,|   ___`-.
|  /   \   |___/  /   \  `-.
|_| (O) |________| (O) |____|
   \___/          \___/
HEREDOC;

        return $carShape;
    }
}