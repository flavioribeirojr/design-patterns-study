<?php

class Post extends Notifier
{
    public function validateTo(): bool
    {
        $address = explode(',', $this->to);

        if (count($address) !== 2) {
            return false;
        }

        return true;
    }

    public function sendNotification(): string
    {
        if (!$this->validateTo()) {
            throw new \Exception("Invalid address");
        }

        $notificationType = get_class($this);
        
        return "This is a {$notificationType} to {$this->to}.";
    }
}