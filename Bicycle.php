<?php


class bicycle
{
    /**
     * @var string
     */
    public $color;

    /**
     * @var integer
     */
    public $currentSpeed;
    /**
     * @var integer
     */
    public $nbSeats = 1;
    /**
     * @var integer
     */
    public $nbWheels = 2;


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
    public function setColor(string $color) : void
    {
        $this->color = $color;
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
     * @return void
     */

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }

    }
    public function __construct(string $color, int $nbWheels)
    {
        $this->$color = $color;
        $this->$nbWheels = $nbWheels;
    }


    public function forward()
    {
        $this->currentSpeed = 15;

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