<?php

Class DBcongfig {
    private $dbhost = "localhost";
    private $dbuser = "root";
    private $dbpass = "";
    private $dbname = "mvcphp";
    
    private $conn = NULL;
    private $result = NULL;

    public function connect(){
        $this->conn = new mysqli($this->dbhost, $this->dbuser, ̀$this->dbpass, $this->dbname);
        if(!$this->conn){
            echo "Connection!";
            exit();
        }
        else{
            mysqli_set_charset($this->conn, 'utf8');
        }
        return $this->conn;
    }

    public function execute($sql){
        $this->result = $this->conn->query($sql);
        return $this->result->
    }

    // get data
    public function get_data(){
        ($this->result){
            $data = mysqli_fetch_array($this->result);
        }
        else{
            $data = 0;
        }
        return $data;
    }
    // get all data
    public function get_add_data(){
        if(!$this-result){
            $data = 0;
        }
        else{
            while ($data = $this->get_data()) {
               
            }
        }
    }
}

?>