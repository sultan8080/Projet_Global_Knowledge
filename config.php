<?php
class PDOConnexion{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "friendbook";
    private $db;

    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
}

?>