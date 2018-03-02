<?php

class Army implements Offense
{
    private $offense = array();

    public function addOffense(Offense $attacker): bool
    {
        $this->offense[spl_object_hash($attacker)] = $attacker;
        return true;
    }

    public function removeOffense(Offense $attacker): bool
    {
        unset($this->offense[spl_object_hash($attacker)]);
        return true;
    }

    public function attack(): void
    {
        foreach ($this->offense as $attacker) {
            $attacker->attack();
        }
    }
}