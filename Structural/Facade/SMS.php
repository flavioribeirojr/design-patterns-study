<?php

class SMS
{
    private $from;

    public function __construct(string $from)
    {
        $this->from = $from;
    }

    public function send(string $to, string $message): bool
    {
        if (empty($to)) {
            return false;
        }

        if (strlen($message) === 0) {
            return false;
        }

        echo "{$to} received message {$message}";
        return true;
    }
}