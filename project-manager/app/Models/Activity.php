<?php

class Activite
{
    private $description;
    private $date;

    public function __construct($description)
    {
        $this->description = $description;
        $this->date = date('Y-m-d');
    }

    public function getDescription():
    {
        return $this->description;
    }

    public function getDate():
    {
        return $this->date;
    }
}