<?php

require_once('Manufacter.php');
require_once('Post.php');
require_once('SMS.php');
require_once('ToyShop.php');

$childrensToyFactory = new ToyShop('1 Factory Lane, Oxfordshire', '07999999999', 5);
$childrensToyFactory->processOrder('8 Midsummer Boulevard', '07123456789');