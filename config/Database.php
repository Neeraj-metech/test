<?php
class Database{
    private $host = 'localhost';
    private $db_name = 'laravel';
    private $user = 'root';
    private $pass = '';
    private $conn;

    public function connection(){
        $this->conn = null;
        try{
            $this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->db_name,$this->user,$this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
        }catch(PDOException $e){
            echo "Connection error :".$e->getmessage();
        }
        return $this->conn;
    }

}
