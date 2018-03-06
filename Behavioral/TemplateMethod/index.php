<?php

require_once('Programmer.php');
require_once('PHPProgrammer.php');
require_once('JavaProgrammer.php');

$phpCoder = new PHPProgrammer('PHP');
$phpCoder->code();

$javaCoder = new JavaProgrammer('Java');
$javaCoder->code();