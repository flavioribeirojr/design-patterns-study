<?php

require_once('Book.php');
require_once('EBook.php');

$PHPBook = new EBook('Mastering PHP Design Patterns', 'Junade Ali', 'Some contents');

require_once('PrintBook.php');

$PHPBook = new PrintBook('Mastering PHP Design Patterns', 'Junade Ali', 'Some contents');
echo $PHPBook->getText();