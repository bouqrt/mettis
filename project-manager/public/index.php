<?php

require_once "../config/Database.php";

$database = new Database();
$db = $database->connect();

echo "Connected successfully!";