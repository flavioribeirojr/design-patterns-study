<?php

require_once('Offense.php');
require_once('Soldier.php');
require_once('Army.php');

$redSoldier = new Soldier('Red', 40);
$blueSoldier = new Soldier('Blue', 60);
$greenSoldier = new Soldier('Green', 50);

$riverArmy = new Army();
$memeArmy = new Army();
$superArmy = new Army();

$riverArmy->addOffense($redSoldier);
$riverArmy->addOffense($blueSoldier);

$memeArmy->addOffense($greenSoldier);

$superArmy->addOffense($riverArmy);
$superArmy->addOffense($memeArmy);

$superArmy->attack();