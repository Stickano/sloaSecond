<?php

class ServicesController{
    
    private $conn;
    private $db;
    public function __construct(connection $conn, crud $db){
        $this->conn = $conn;
        $this->db = $db;
    }

}

?>