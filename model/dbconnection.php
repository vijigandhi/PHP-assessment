<?php

$config = require("config.php");
$databaseConnection = new DatabaseConnection($config);
$conn = $databaseConnection->dbConnection();

class Databaseconnection
{
    public $connection;
    public function __construct($config)
    {
        $this->connection = mysqli_connect($config["host"], $config["username"], $config["password"], $config["dbname"]);

        if (!$this->connection) {
            throw new Exception("Connection failed: " . mysqli_connect_error());
        }
    }
    public function dbConnection()
    {
        return $this->connection;
    }
}