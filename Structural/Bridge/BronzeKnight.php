<?php

abstract class BronzeKnight implements Knight
{
    protected $power;

    public function setPower(\Power $power)
    {
        $this->power = $power;        
    }
}