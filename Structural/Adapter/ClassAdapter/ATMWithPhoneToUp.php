<?php

class ATMWithPhoneToUp extends ATM
{
    public function getToUp(float $amount, int $time): string
    {
        if ($this->reduceBalance($amount)) {
            return $this->generateToUpCode($amount, $time);
        }

        throw new \Exception('Could not withdraw money');
    }

    private function generateToUpCode(float $amount, int $time): string
    {
        return $amount . $time . rand(0, 1000);
    }
}