<?php

class Pizza
{
    private $size;
    private $cheese;
    private $pepperoni;
    private $bacon;

    public function __construct(PizzaBuilder $builder)
    {
        $this->size = $builder->size;
        $this->cheese = $builder->cheese;
        $this->pepperoni = $builder->pepperoni;
        $this->bacon = $builder->bacon;
    }

    public function show(): string
    {
        $recipe = $this->size . ' inch pizza with the following topics: ';
        $recipe .= $this->cheese ? 'cheese, ' : '';
        $recipe .= $this->pepperoni ? 'pepperoni, ' : '';
        $recipe .= $this->bacon ? 'bacon.': '';

        return $recipe;
    }
}