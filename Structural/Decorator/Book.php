<?php

interface Book
{
    public function __construct(string $title, string $author, string $contents);

    public function getTitle(): string;

    public function getAuthor(): string;

    public function getContents(): string;
}