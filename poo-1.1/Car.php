<?php

class Car
{

    private int $nbwheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->energy = $energy;
    }
    public function forward(): string
    {
        $this->currentSpeed = 20;

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
    public function start(): string
    {
        $this->start= 0;

        return "Go !";
    }

    /**
     * @return INT
     */
    public function getNbwheels(): int
    {
        return $this->nbwheels;
    }

    /**
     * @param INT $nbwheels
     */
    public function setNbwheels(int $nbwheels): void
    {
        $this->nbwheels = $nbwheels;
    }

    /**
     * @return INT
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * @param INT $currentSpeed
     */
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

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
     * @return string
     */
    public function getNbSeats(): string
    {
        return $this->nbSeats;
    }

    /**
     * @param string $nbSeats
     */
    public function setNbSeats(string $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
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
     */
    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    /**
     * @return INT
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    /**
     * @param INT $energyLevel
     */
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }







}