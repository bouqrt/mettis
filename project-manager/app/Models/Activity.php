<?php
class Activite
{
    private $id;
    private $description;
    private $projetId;

    public function __construct($description, $projetId)
    {
        $this->description = $description;
        $this->projetId = $projetId;
    }

    public function getDescription()
    {
        return $this->description;
    }
}