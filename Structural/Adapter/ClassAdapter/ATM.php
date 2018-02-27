<?php

class ATM
{
    private $balance;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }

    public function withdraw(float $amount): float
    {
        if ($this->reduceBalance($amount)) {
            return $amount;
        }

        throw new \Exception("Could not withdraw money");
    }

    protected function reduceBalance(float $amount): bool
    {
        if ($amount >= $this->balance) {
            return false;
        }

        $this->balance = ($this->balance - $amount);

        return true;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}