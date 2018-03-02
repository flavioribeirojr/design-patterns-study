<?php

namespace IcyApril\PetShop\AnimalFeeders;

use IcyApril\PetShop\AnimalFeeder;

class Dog implements AnimalFeeder
{
    private $petName;

    public function __construct(string $petName)
    {
        if (strlen($petName) > 10) {
            throw new \Exception('Name too long');
        }

        $this->petName = $petName;
    }

    public function dropFood(int $hungerLevel, bool $water = false): string
    {
        return $this->selectFood($hungerLevel) . ($water ? ' with water' : '');
    }

    public function displayFood(int $hungerLevel): string
    {
        return $this->selectFood($hungerLevel);
    }

    public function selectFood(int $hungerLevel): string
    {
        if ($hungerLevel == 3) {
            return 'chicken and vegetables';
        } else if (date('H') < 10) {
            return 'turkey and beef';
        } else {
            return 'chicken and rice';
        }
    }
}