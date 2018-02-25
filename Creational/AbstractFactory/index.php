<?php

require_once('ToyFactory.php');
require_once('Toys/Toy.php');
require_once('Toys/MazeToy.php');
require_once('Toys/PuzzleToy.php');

require_once('SFToyFactory.php');

require_once('Toys/SFMazeToy.php');
require_once('Toys/SFPuzzleToy.php');

$sanFranciscoFactory = new SFToyFactory();
var_dump($sanFranciscoFactory->makeMaze());
echo "\n";
var_dump($sanFranciscoFactory->makePuzzle());
echo "\n";

require_once('LondonToyFactory.php');

require_once('Toys/LondonMazeToy.php');
require_once('Toys/LondonPuzzleToy.php');

$londonFactory = new LondonToyFactory();

var_dump($londonFactory->makeMaze());
echo "\n";
var_dump($londonFactory->makePuzzle());