<?php

class LondonToyFactory implements ToyFactory
{
    public function makeMaze()
    {
        return new Toys\LondonMazeToy();
    }

    public function makePuzzle()
    {
        return new Toys\LondonPuzzleToy();
    }
}