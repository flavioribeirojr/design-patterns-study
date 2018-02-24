<?php

class CourierNotifierFactory implements NotifierFactory
{
    public static function getNotifier(string $notifier, string $to): Notifier
    {
        if (empty($notifier)) {
            throw new \Exception('No notifier passed.');
        }

        $notifiers = array(
            'Post' => function (string $to) {
                return new Post($to);
            }
        );

        if (isset($notifiers[$notifier])) {
            return $notifiers[$notifier]($to);
        }

        throw new \Exception('Notifier not found');
    }
}