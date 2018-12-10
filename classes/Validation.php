<?php
class Validation extends Connection {
    protected $conn;
    public function __construct()
    {
        $dbConnection = new Connection();
        $this->conn = $dbConnection->connect();
    }

    /*
    ************************************
       FOR DATA SANITIZATION
    ************************************
    */
    private function sanitize($data)
    {
        $data = trim($data);
        $data = htmlentities($data);
        return $data;
    }
}
