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

    /*
    ****************************************
       CHECKS IF PASSWORD IS VALID
    ****************************************
    */
    public function validatePassword($password)
    {
        $isValid = false;
        if (!empty($this->sanitize($password))) {
            $isValid = true;
        }
        return $isValid;
    }

    /*
    ****************************************
         CHECKS IF NAME IS VALID
    ****************************************
    */
    public function validateName($name)
    {
        $isValid = false;
        $name = $this->sanitize($name);
        if (!empty(preg_match("/^([a-zA-Z' ]+)$/", $this->sanitize($name)))) {
            $isValid = true;
        }
        return $isValid;
    }    
}
