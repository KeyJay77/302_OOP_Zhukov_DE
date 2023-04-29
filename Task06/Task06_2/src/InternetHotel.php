<?php

namespace App;

class InternetHotel implements Hotel
{
    protected $hotel;

    public function __construct(Hotel $hotel)
    {
        $this->hotel = $hotel;
    }

    public function getCost()
    {
        return $this->hotel->getCost() + 100;
    }

    public function getDescription()
    {
        return $this->hotel->getDescription() . ', internet';
    }
}
