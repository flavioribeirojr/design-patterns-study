<?php

require_once('PizzaBuilder.php');
require_once('Pizza.php');

$builder = (new PizzaBuilder(9))
    ->cheese(true)
    ->pepperoni(true)
    ->bacon(true)
    ->build();

$order = new Pizza($builder);

echo $order->show();