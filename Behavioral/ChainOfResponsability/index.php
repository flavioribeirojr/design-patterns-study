<?php

require_once('Developer.php');
require_once('JuniorDeveloper.php');
require_once('IntermediateDeveloper.php');

$junior = new JuniorDeveloper();
$intermediate = new IntermediateDeveloper();

$junior->setNextDeveloper($intermediate);

$junior->code(5);