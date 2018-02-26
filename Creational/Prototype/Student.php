<?php

class Student
{
    public $name;
    public $year;
    public $grade;

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    public function setGrade(string $grade): void
    {
        $this->grade = $grade;
    }
}