<?php

class IntermediateDeveloper implements Developer
{
    private $nextDeveloper;

    public function setNextDeveloper(\Developer $developer): bool
    {
        $this->nextDeveloper = $developer;
    }

    public function code(int $taskComplexity): bool
    {
        if ($taskComplexity <= 6) {
            var_dump('Challenge accepted');
            return true;
        }

        if (isset($this->nextDeveloper)) {
            return $this->nextDeveloper->code();
        }

        var_dump('Could not accept challenge');

        return false;
    }
}