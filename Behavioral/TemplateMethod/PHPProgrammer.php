<?php

class PHPProgrammer extends Programmer
{
    protected function doWorkaround(): bool
    {
        var_dump('Lets put some business rule on the view');
        return true;
    }

    protected function applyDesignPatterns(): bool
    {
        var_dump("I don't need this");
        return false;
    }

    protected function deploy(): bool
    {
        var_dump("Time for deploy, sending to Heroku");
        return true;
    }
}