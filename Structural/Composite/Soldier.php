<?php

class Soldier implements Offense
{
    private $name;
    private $damage;

    public function __construct(string $name, int $damage)
    {
        $this->name = $name;
        $this->damage = $damage;
    }

    public function attack(): void
    {
        echo "Soldier {$this->name} attack with {$this->damage} damage";
    }
}