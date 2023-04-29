<?php

namespace App;

class BaseHotel implements Hotel
{
    private $type;

    public function __construct(int $type)
    {
        $this->type = $type;
    }

    public function getCost()
    {
        if ($this->type == 3) {
            return 3000;
        } elseif ($this->type == 2) {
            return 2000;
        } elseif ($this->type == 1) {
            return 1000;
        }
    }

    public function getDescription()
    {
        if ($this->type == 3) {
            return 'Hotel is luxury class';
        } elseif ($this->type == 2) {
            return 'Hotel is middle class';
        } elseif ($this->type == 1) {
            return 'Hotel is economy class';
        }
    }
}
