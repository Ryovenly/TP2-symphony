<?php
namespace App\Utils;

class CarPrice
{
      /**
   * Get the car Price with values
   *
   * @param int $carYear, int $nbKm, int $nbDays
   * @return int
   */

    public function toGetCarPrice(int $carYear, int $nbKm, int $nbDays):int
    {
        $price = 0;
        
        $price = $carYear*(0.3) + $nbKm*(0.001) + $nbDays*(3);

        return ($price);
    }
}
