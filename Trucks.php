<?php

require_once "Vehicle.php";
class Trucks extends Vehicle
{
    /**
     * @var integer
     */
    protected $loadingCapacity;

    /**
     * @var integer
     */
    protected $loading=0;


    /**
     * @return int
     */
    public function getLoadingCapacity(): int
    {
        return $this->loadingCapacity;
    }

    /**
     * @param int $loadingCapacity
     * @return Trucks
     */
    public function setLoadingCapacity(int $loadingCapacity): Trucks
    {
        $this->loadingCapacity = $loadingCapacity;
        return $this;
    }

    /**
     * @return int
     */
    public function getLoading(): int
    {
        return $this->loading;
    }

    /**
     * @param int $loading
     * @return Trucks
     */
    public function setLoading(int $loading): Trucks
    {
        $this->loading = $loading;
        return $this;
    }

    public function __construct(string $loadingCapacity, string $color, int $nbSeat, string $energy )
    {
        parent::__construct($color, $nbSeat, $energy);
        $this->loadingCapacity = $loadingCapacity;
        $this->color = $color;
        $this->nbSeat = $nbSeat;
        $this->energy = $energy;
    }
    public function content(): string
    {
        if ($this->loading == $this->loadingCapacity) {
            $sentence='full';
        }
        else {
            $sentence='in filling';
        }
        return $sentence;
    }
}