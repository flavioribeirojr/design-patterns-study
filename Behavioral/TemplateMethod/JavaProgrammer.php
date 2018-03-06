<?php

class JavaProgrammer extends Programmer
{
    protected function doWorkaround(): bool
    {
        var_dump("Workaround!? Don't know what this is");
        return false;
    }

    protected function applyDesignPatterns(): bool
    {
        var_dump("Oh yeah, design patterns! But let me allocate some memory first");
        return true;
    }

    protected function deploy(): bool
    {
        var_dump("Deploy!? Oh, crap");
        return false;
    }
}