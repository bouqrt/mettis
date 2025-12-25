<?php
abstract class Projet
{
    protected string $titre;

    public function __construct(string $titre)
    {
        $this->titre = $titre;
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    abstract public function getType(): string;
}