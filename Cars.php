<?php


class Cars
{
    /**
     * @var string
     */
    public $color;


    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }


    /**
     * @var integer
     */
    public $nbSeat;

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
    public function getNbSeat(): int
    {
        return $this->nbSeat;
    }

    /**
     * @var string
     */
    public $energy;

    /**
     * @param string $energy
     */
    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }
    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @var integer
     */
    private  $nbWheels;

    /**
     * @return int
     */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    /**
     * @var integer
     */
    private  $currentFuel;

    /**
     * @return int
     */
    public function getCurrentFuel(): int
    {
        return $this->currentFuel;
    }

    /**
     * @var integer
     */
    public $currentSpeed;

    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }


    public function __construct(string $color, int $nbSeat, string $energy)
    {
        $this->$color = $color;
        $this->$nbSeat = $nbSeat;
        $this->$energy = $energy;
    }

    public function start(): string
    {
        $currentFuel =10;
        if ($currentFuel >= 5) {
            $this->currentFuel = $currentFuel;
            return "Let's go !! tu as assez de carburant !<br>";
        }
            else {
                return 'oh !!! fill up';
            }

    }
    public function forward()
    {
        $this->currentSpeed;

        return "It's rolls !";
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