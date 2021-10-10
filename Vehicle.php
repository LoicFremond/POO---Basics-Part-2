<?php


class Vehicle
{
    /**
     * @var string
     */
    protected $color;

    /**
     * @var integer
     */
    protected $nbSeat;

    /**
     * @var integer
     */
    protected $nbWheels;

    /**
     * @var string
     */
    protected $energy;

    /**
     * @var integer
     */
    public $currentSpeed;
    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getNbSeat(): int
    {
        return $this->nbSeat;
    }

    /**
     * @param int $nbSeat
     */
    public function setNbSeat(int $nbSeat): void
    {
        $this->nbSeat = $nbSeat;
    }

    /**
     * @return int
     */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    /**
     * @param int $nbWheels
     */
    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @param string $energy
     * @return Vehicle
     */
    public function setEnergy(string $energy): Vehicle
    {
        $this->energy = $energy;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * @param int $currentSpeed
     */
    public function setCurrentSpeed(int $currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }


    public function __construct(string $color, int $nbSeat, string $energy)
    {
        $this->color = $color;
        $this->nbSeat = $nbSeat;
        $this->energy = $energy;
    }
    public function forward(): string
    {
        $this->currentSpeed;
        return "Go !";
    }
    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }


}