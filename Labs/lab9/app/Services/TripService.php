<?php

namespace App\Services;

class TripService
{
    public function calculatePromoPrice($price)
    {
        if ($price < 5000) {
            // Brak promocji, cena bez zmian
            return $price;
        } elseif ($price < 10000) {
            // Zastosowanie promocji - obniżka o 2500 zł
            return $price - 2500;
        } else {
            // Zastosowanie promocji - obniżka o 5000 zł
            return $price - 5000;
        }
    }

}
