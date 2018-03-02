<?php

namespace IcyApril\PetShop;

class AnimalFeederProxy
{
    protected $instance;

    public function __construct(string $feeder, string $name)
    {
        $class = __NAMESPACE__ . '\\AnimalFeeders\\' . $feeder;
        $this->instance = new $class($name);
    }

    public function __call($name, $arguments)
    {
        return call_user_func_array([$this->instance, $name], $arguments);
    }
}