<?php

class InsuranceMarketCompare implements MarketCompare
{
    private $premium;

    public function __construct(float $limit, float $excess)
    {
        $this->premium = new Insurance($limit, $excess);   
    }

    public function getAnnualPremium()
    {
        return $this->premium->annualPremium();
    }

    public function getMonthlyPremium()
    {
        return $this->premium->monthlyPremium();
    }
}