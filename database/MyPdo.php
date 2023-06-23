<?php

class MyPdo {

    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;

    private $pdo;
    public function __construct($db_name="book", $db_user='', $db_pass='', $db_host ='localhost')
    {
        $this->db_name = $db_name;  
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }

    private function getPdo(){

        if ($this->pdo === null) {
            $pdo = new PDO('mysql:host=localhost;dbname=book', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            $this->pdo = $pdo;
        }

        return $pdo;

    }

    public function query($statement){

        $req = $this->getPdo()->query($statement);
        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;
    }

    public function exec($statement){
        $req = $this->getPdo()->exec($statement);
        return $req;
    }
}