<?php

require_once('Move.php');
require_once('Walk.php');
require_once('Drive.php');
require_once('Racer.php');

$raceTypes = [
    'carRace' => function () {
        return new Racer(new Drive());
    },
    'footRace' => function () {
        return new Racer(new Walk());
    }
];

if (count($argv) < 2) {
    throw new Exception('Identifier parameter missing.');
}

if (!isset($raceTypes[$argv[1]])) {
    echo "Identifier doesn't exists";
    return;
}

$racer = $raceTypes[$argv[1]]();

$racer->race();