<?php

class Database
{
    private string $host = "localhost";
    private string $db_name = "metis";
    private string $username = "root";
    private string $password = "";
    private ?PDO $conn = null;

    public function connect(): PDO
    {
        try {
            if ($this->conn === null) {
                $dsn = "mysql:host={$this->host};dbname={$this->db_name};charset=utf8mb4";

                $this->conn = new PDO(
                    $dsn,
                    $this->username,
                    $this->password,
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                        PDO::ATTR_EMULATE_PREPARES => false,
                    ]
                );
            }

            return $this->conn;

        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }
}