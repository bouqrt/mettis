<?php
abstract class Projet
{
    protected $id;
    protected $titre;
    protected $membreId;

    public function __construct($titre, $membreId)
    {
        $this->titre = $titre;
        $this->membreId = $membreId;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function getMembreId()
    {
        return $this->membreId;
    }

    abstract public function getType();
}