<?php

class Post
{
    private $sender;

    public function __construct(string $sender)
    {
        $this->sender = $sender;
    }

    public function dispatch(string $item, string $to): bool
    {
        if (strlen($item) !== 13) {
            return false;
        }

        if (empty($to)) {
            return false;
        }

        return true;
    }
}