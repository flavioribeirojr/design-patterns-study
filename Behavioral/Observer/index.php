<?php

require_once('Feed.php');
require_once('Reader.php');

$newspaper = new Feed('Redator.com');

$bruce = new Reader('Bruce');
$tim = new Reader('Tim');
$alfred = new Reader('Alfred');

$newspaper->attach($bruce);
$newspaper->attach($tim);
$newspaper->attach($alfred);

$newspaper->detach($tim);

$newspaper->breakOutNews('Now you can use instagram without taking photos of your food');