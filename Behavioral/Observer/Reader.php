<?php

class Reader implements SplObserver
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function update(SplSubject $subject)
    {
        echo $this->name . ' is reading the article - ' . $subject->getContent() . "\n";
    }
}