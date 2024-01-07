<?php

require_once("DL/config.php");

class Database
{

    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getAll()
    {
        $sql = "SELECT nom, cognom, alies, email, password FROM base";
        return ($this->conn->query($sql));
    }

    public function insertUser($email, $password, $username)
    {
        $email = $this->conn->real_escape_string($email);
        $password = $this->conn->real_escape_string($password); 
        $sql = "INSERT INTO base (email, password, username) VALUES ('$email', '$password', '$username')";
        return ($this->conn->query($sql));
    }
}
?>
