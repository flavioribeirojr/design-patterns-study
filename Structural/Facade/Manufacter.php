<?php

class Manufacter
{
    private $capacity;

    public function __construct(int $capacity)
    {
        $this->capacity = $capacity;
    }

    public function build(): string
    {
        return uniqid();
    }
}