<?php

require_once('Power.php');
require_once('RisingDragonPunch.php');
require_once('PegasusMeteor.php');
require_once('Knight.php');
require_once('BronzeKnight.php');
require_once('DragonKnight.php');
require_once('PegasusKnight.php');

$seya = new PegasusKnight();
$seya->setPower(new PegasusMeteor());

$seya->throw(100);

echo "\n";

//The best one, for sure
$shiryu = new DragonKnight();
$shiryu->setPower(new RisingDragonPunch());

$shiryu->throw(120);