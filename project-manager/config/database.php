<?php 
class database {
    private string $host= "localhost";
    private string $db_name= "metis";
    private string $username= "root";
    private string $passwor="";
    private ?pdo $cnn= null;


    public function connect():pdo {
        if ($this->cnn === null){
            try {
                $dsn = "mysql:host={$this->host};dbname={$this->db_name};charset=utf8mb4";
                $this->cnn = new pdo($dsn,$this->username,$this->password,[
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES   => false,
                ]);
            } catch (PDOException $e) {
                die("Database connection error: " . $e->getMessage());
            }
        }
        return $this->conn;
    }
}
