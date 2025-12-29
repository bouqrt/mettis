<?php
class Member
{
    private $name;
    private $email;

    public function __construct($name, $email)
    {
        $this->setName($name);
        $this->setEmail($email);
    }

    public function getName(): 
    {
        return $this->name;
    }

    public function setName($name): void
    {
        if (empty($name)) {
            throw new Exception("Invalid name");
        }
        $this->name = $name;
    }

    public function getEmail():
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Invalid email");
        }
        $this->email = $email;
    }
}