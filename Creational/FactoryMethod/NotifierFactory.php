<?php

interface NotifierFactory
{
    public static function getNotifier(string $notifier, string $to): Notifier;
}