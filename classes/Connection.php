<?php
class Connection
{
    private $dbusername = 'root';
    private $dbhost = 'localhost';
    private $dbpassword = 'root';
    private $dbname = 'newsmag';
    protected $conn;
    public function connect()
    {
        try {
            $this->conn = new PDO('mysql:host=localhost;dbname='.$this->dbname, $this->dbusername, $this->dbpassword);
            // To use limit clause in sql query
            $this->conn->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );
            return $this->conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $this->conn;
    }
}
