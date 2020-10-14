<?php
class Car
{

    private $nbWheel;

    public $currentSpeed;

    private $color;

    private $nbSeat;

    private $energy;

    private $fuelLevel;



    public function dump()
    {
        echo "<pre>";
        var_dump($this);
    }


    public function __construct(int $nbWheel = 4,string $color = 'red',int $nbSeat = 5, string $energy = 'gazoline',
    int $fuelLevel = 100)
    {
        $this->nbWheel = $nbWheel;
        $this->currentSpeed = $currentSpeed = 15;
        $this->color = $color;
        $this->nbSeat = $nbSeat;
        $this->energy = $energy;
        $this->fuelLevel = $fuelLevel;

    }


    public function forward()
    {
        $this->currentSpeed = 90;

        return "J'avance";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 80) {
            $this->currentSpeed--;
            $sentence .= "Freine !";
        }
        $sentence .= "<br> Je freine !";
        return $sentence;

    }

    public function start()
    {
      $this->currentSpeed = 0;

      return "Démarrage !";
    }


    public function getNbWheel(): int
    {
        return $this->nbWheel;
    }

    public function setNbWheel(int $nbWheel): void
    {
        $this->nbWheel = $nbWheel;
    }


    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        $this->nbWheel = $currentSpeed;
    }


    public function getcolor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): string
    {
        $this->color = $color;
    }

    public function getNbSeat(): int
    {
        return $this->nbSeat;
    }

    public function setNumberSeat(int $nbSeat): void
    {
        $this->nbSeat = $nbSeat;
    }


    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function getFuelLevel(): int
    {
        return $this->fuelLevel;
    }

    public function setFuelLevel(int $fuelLevel): void
    {
        $this->nbWheel = $fuelLevel;
    }


}
