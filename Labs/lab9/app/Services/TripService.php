<?php

namespace App\Services;

class TripService
{
    public function calculatePromoPrice($price)
    {
        if ($price > 10000) return $price - 5000;
        if ($price < 10000 && $price > 5000) return $price - 2500;
        return $price;
    }

}
