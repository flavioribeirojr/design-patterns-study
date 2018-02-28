<?php

class Insurance
{
    private $limit;
    private $excess;

    public function __construct(float $limit, float $excess)
    {
        if ($excess >= $limit) {
            throw new \Exception('Excess must be less then premium');
        }

        $this->limit = $limit;
        $this->excess = $excess;
    }

    public function monthlyPremium(): float
    {
        return ($this->limit - $this->excess)/200;
    }

    public function annualPremium(): float
    {
        return $this->monthlyPremium() * 11.5;
    }
}