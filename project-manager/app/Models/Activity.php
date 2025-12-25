<?php

class Activite
{
    private string $description;
    private string $date;

    public function __construct(string $description)
    {
        $this->description = $description;
        $this->date = date('Y-m-d');
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getDate(): string
    {
        return $this->date;
    }
}