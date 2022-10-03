<?php

  class Car
  {
    private int $nbWheels = 4;

    private int $currentSpeed;

    private string $color;

    private int $nbSeats;

    private string $energieType;

    private int $energieLevel;

    public function __construct(string $color, int $nbSeats, string $energieType)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energieType = $energieType;
    }

    public function start(): string
    {
        if (empty($this->currentSpeed)){
            return "Already started !!";
        }
        else {
            return "Go !";
        }
    }

    public function forward(): void
    {
        if (empty($this->currentSpeed)){
            $this->currentSpeed = 1;
        }
        else {
            $this->currentSpeed++;
        }
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

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    // public function setNbWheels(string $nbWheels): void
    // {
    //     $this->nbWheels = $nbWheels;
    // }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    // public function setCurrentSpeed(int $currentSpeed): void
    // {
    //     if($currentSpeed >= 0) {
    //         $this->currentSpeed = $currentSpeed;
    //     }
    // }

    public function getColor(): string
    {
        return $this->color;
    }

    // public function setColor(string $color): void
    // {
    //     $this->color = $color;
    // }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    // public function setNbSeats(string $nbSeats): void
    // {
    //     $this->nbSeats = $nbSeats;
    // }

    public function getEnergieType(): string
    {
        return $this->energieType;
    }

    // public function setEnergieType(string $energieType): void
    // {
    //     $this->energieType = $energieType;
    // }

    public function getEnergieLevel(): int
    {
        return $this->energieLevel;
    }

    // public function setEnergieLevel(string $energieLevel): void
    // {
    //     $this->energieLevel = $energieLevel;
    // }
  }