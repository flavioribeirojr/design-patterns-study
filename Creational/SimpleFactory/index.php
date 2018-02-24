<?php

require_once('Notifier.php');
require_once('NotifierFactory.php');

require_once('SMS.php');

$mobile = NotifierFactory::getNotifier('SMS', '07111111111');
echo $mobile->sendNotification();

require_once('Email.php'); 
$email = NotifierFactory::getNotifier("Email", "test@example.com"); 
echo $email->sendNotification(); 