<?php

class Feed implements SplSubject
{
    private $name;
    private $content;
    private $observers = array();

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function breakOutNews(string $content): void
    {
        $this->content = $content;
        $this->notify();
    }

    public function getContent(): string
    {
        return $this->content . ' on ' . $this->name;
    }

    public function attach(SplObserver $observer): void
    {
        $hashObject = spl_object_hash($observer);

        $this->observers[$hashObject] = $observer;
    }

    public function detach(SplObserver $observer): void
    {
        $hashObject = spl_object_hash($observer);

        unset($this->observers[$hashObject]);
    }
}