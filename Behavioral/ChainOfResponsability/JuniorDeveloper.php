<?php

class JuniorDeveloper implements Developer
{
    private $nextDeveloper;

    public function setNextDeveloper(\Developer $developer): bool
    {
        $this->nextDeveloper = $developer;
        return true;
    }

    public function code(int $taskComplexity): bool
    {
        if ($taskComplexity <= 3) {
            var_dump("Challenge accepted");
            return true;
        }

        if (isset($this->nextDeveloper)) {
            return $this->nextDeveloper->code($taskComplexity);
        }

        var_dump("Could not accept the challenge");

        return false;
    }
}