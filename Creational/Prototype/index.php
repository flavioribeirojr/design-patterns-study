<?php

require_once('Student.php');

$firstObject = new Student();
$firstObject->setName('Taylor');
$firstObject->setYear(2);
$firstObject->setGrade('A*');

var_dump($firstObject);

$secondObject = clone $firstObject;
$secondObject->setName('Bob');
$secondObject->setGrade('B');

var_dump($secondObject);

$secondObject->danceSkills = 'Outstanding';
$secondObject->dance = function (string $style) {
    return "Dancing $style style.";
};

var_dump($secondObject);
var_dump($secondObject->dance->__invoke('Pogo'));