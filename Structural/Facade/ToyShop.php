<?php

class ToyShop
{
    private $courier;
    private $manufacter;
    private $sms;

    public function __construct(string $factoryAdress, string $contactNumber, int $capacity)
    {
        $this->courier = new Post($factoryAdress);
        $this->manufacter = new Manufacter($capacity);
        $this->sms = new SMS($contactNumber);
    }

    public function processOrder(string $address, $phone)
    {
        $item = $this->manufacter->build();
        $this->courier->dispatch($item, $address);
        $this->sms->send($phone, "You order has been shipped.");
    }
}