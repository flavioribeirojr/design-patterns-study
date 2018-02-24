<?php

class NotifierFactory
{
    public static function getNotifier(string $notifier, string $to): Notifier
    {
        $notifiers = array(
            'SMS' => function (string $to) {
                return new SMS($to);
            },
            'Email' => function (string $to) {
                return new Email($to, 'Flavio');
            }
        );

        if (isset($notifiers[$notifier])) {
            return $notifiers[$notifier]($to);
        }

        throw new \Exception('Notifier not found');
    }
}