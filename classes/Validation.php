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

    /*
    ****************************************
       CHECKS IF USERNAME IS VALID
    ****************************************
    */
    public function validateUsername($username)
    {
        $isValid = false;
        if (!empty(preg_match('/^[A-Za-z][A-Za-z0-9]{5,31}$/', $this->sanitize($username))) {
            $isValid = true;
        }
        return $isValid;
    }
}
