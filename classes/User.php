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

    /*
    ****************************************
          LOGIN FOR ADMIN
    ****************************************
    */
    public function login($username, $password)
    {
        $isLogin = false;
        $query = "SELECT username, password, user_id FROM user WHERE username = ? AND password = ?";
        $login = $this->conn->prepare($query);
        $login->execute([$username, md5($password)]);
        if ($login->rowCount() > 0) {
            $row = $login->fetch();
            $_SESSION['user_id'] = $row['user_id'];
            $isLogin = true;
        }
        return $isLogin;
    }

    /*
    *******************************************
          RETURNS NAME OF PARTICULAR USERS
    *******************************************
    */
    public function getNameById($user_id) {
        $name = "";
        $query = "SELECT name FROM user WHERE user_id = ?";
        $getName = $this->conn->prepare($query);
        $getName->execute([$user_id]);
        if ($getName->rowCount() > 0 ) {
            $row = $getName->fetch();
            $name = $row['name'];
        }
        return $name;
    }  
}
