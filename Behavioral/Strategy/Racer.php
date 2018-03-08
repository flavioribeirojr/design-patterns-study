<?php

class Racer
{
    private $strategy;

    public function __construct(Move $strategy)
    {
        $this->strategy = $strategy;
    }

    public function race()
    {
        $this->strategy->move();
    }
}