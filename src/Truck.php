<?php

namespace App;

class Truck extends Vehicle {
    private $loadCapacity;
    private $loading = 0;

const ALLOWED_ENERGIES=[
    'gas',
    'diesel',
];

public function __construct($color, $nbSeats, $loadCapacity, $fuelType)
    {
        parent::__construct($color, $nbSeats);
        $this->setLoadCapacity($loadCapacity);
        $this->setFuelType($fuelType);
    }



public function setLoadCapacity($loadCapacity)
    {
            $this->loadCapacity = $loadCapacity;
    }

public function getLoadCapacity()
{
    return $this->loadCapacity;
}



public function setLoading($loading)
    {
            $this->loading = $loading;
    }

public function getLoading()
    {
      return $this->loading;
   }

// method to check is truck is fully loaded or not / boolean - echo
public function isFull()
{
    if ($this->getLoading() >= $this->getLoadCapacity()){
    return " full ";
    } else {
       return " in filing ";
    }
}

public function setFuelType($fuelType)
    {
        if (in_array($fuelType, self::ALLOWED_ENERGIES)){
            $this->fuelType=$fuelType;
        }
    }

public function getFuelType()
    {
        return $this->fuelType;
    }

}