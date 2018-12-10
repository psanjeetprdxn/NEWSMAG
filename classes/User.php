<?php
if (!isset($_SESSION)) {
    session_start();
}

class User extends Connection
{
    protected $conn;
    public function __construct()
    {
        $connection = new Connection();
        $this->conn = $connection->connect();
    }

    /*
    ****************************************
          REGISTRATION FOR ADMIN
    ****************************************
    */
    public function register($name, $username, $password)
    {
        $isSignup = false;
        $query = "INSERT INTO user(name, username, password) VALUES(?, ?, ?)";
        $signup = $this->conn->prepare($query);
        $signup->execute([$name, $username, md5($password)]);
        if ($signup) {
            $isSignup = true;
        }
        return $isSignup;
    }
}
