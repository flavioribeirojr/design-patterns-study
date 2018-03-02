<?php

require_once('AnimalFeeder.php');

require_once('Cat.php');
require_once('Dog.php');

require_once('AnimalFeederProxy.php');

$felix = new \IcyApril\PetShop\AnimalFeederProxy('Cat', 'Felix');
echo $felix->displayFood(1) . "\n";
echo $felix->dropFood(1) . "\n";

$brian = new \IcyApril\PetShop\AnimalFeederProxy('Dog', 'Brian');
echo $brian->displayFood(1) . "\n";
echo $brian->dropFood(1) . "\n";