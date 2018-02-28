<?php

interface MarketCompare
{
    public function __construct(float $limit, float $excess);

    public function getAnnualPremium();

    public function getMonthlyPremium();
}