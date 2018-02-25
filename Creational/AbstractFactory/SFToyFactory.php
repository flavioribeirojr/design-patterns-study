<?php

class SFToyFactory implements ToyFactory
{
    private $location = 'San Francisco';

    public function makeMaze()
    {
        return new Toys\SFMazeToy();
    }

    public function makePuzzle()
    {
        return new Toys\SFPuzzleToy();
    }
}