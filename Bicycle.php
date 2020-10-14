<?php

class Bicycle
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
    public $nbSeats;
    /**
     * @var integer
     */
    public $nbWheels;

    public function __construct()
    {
        $this->color = $color = 'blue';
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


    public function dump()
    {
        echo "<pre>";
        var_dump($this);
    }

    public function getColor(): string
    {
        return $this->color;
    }
    public function setColor(string $color) : void
    {
        $this->color = $color;
    }
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }
