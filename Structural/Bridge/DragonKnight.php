<?php

class DragonKnight extends BronzeKnight
{
    public function throw(int $cosmusLevel)
    {
        $this->power->throw($cosmusLevel);
    }
}