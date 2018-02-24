<?php

require_once('Notifier.php');
require_once('NotifierFactory.php');
require_once('EletronicNotifierFactory.php');

require_once('SMS.php');

$mobile = EletronicNotifierFactory::getNotifier('SMS', '07111111111');
echo $mobile->sendNotification();

echo "\n";

require_once('Email.php'); 
$email = EletronicNotifierFactory::getNotifier("Email", "test@example.com"); 
echo $email->sendNotification(); 

echo "\n";

require_once('CourierNotifierFactory.php');

require_once('Post.php');
$post = CourierNotifierFactory::getNotifier('Post', '10 Downing Street, SW1A 2AA');

echo $post->sendNotification();