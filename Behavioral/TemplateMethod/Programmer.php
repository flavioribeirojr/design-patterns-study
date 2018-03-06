<?php

abstract class Programmer
{
    protected $language;

    public function __construct(string $language)
    {
        $this->language = $language;
    }

    public function code()
    {
        $this->turnComputerOn();

        if (!$this->doWorkaround()) {
            $this->applyDesignPatterns();
        }

        $this->deploy();
    }

    public function turnComputerOn(): bool
    {
        var_dump($this->language . ' Programmer Notebook on');

        return true;
    }

    protected abstract function doWorkaround(): bool;

    protected abstract function applyDesignPatterns(): bool;

    protected abstract function deploy(): bool;
}