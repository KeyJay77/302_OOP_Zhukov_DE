<?php

namespace App;

class MaxPriceFilter implements ProductFilteringStrategy
{
    protected $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function filter(Product $product): bool
    {
        return ($product->sellingPrice ?? $product->listPrice) <= $this->price;
    }
}
