<?php

namespace App;

class Product
{
    public $name;
    public $listPrice;
    public $sellingPrice;
    public $manufacturer;


    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setListPrice($listPrice)
    {
        $this->listPrice = $listPrice;
        return $this;
    }

    public function setSellingPrice($sellingPrice)
    {
        $this->sellingPrice = $sellingPrice;
        return $this;
    }

    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }
}
