<?php

interface Developer
{
    public function setNextDeveloper(Developer $developer): bool;

    public function code(int $taskComplexity): bool;
}