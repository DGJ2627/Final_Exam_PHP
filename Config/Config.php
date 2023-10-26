<?php

class Config{
    public $HOSTNAME = "127.0.0.1";
    public $USERNAME = "root";
    public $PASSWORD = "";
    public $DB_NAME = "exam";
    public $con_res;

    public function connect() {
        $this->con_res = mysqli_connect($this->HOSTNAME,$this->USERNAME,$this->PASSWORD,$this->DB_NAME);
        return $this->con_res;
    }

    public function insert($cat_name,$f_name,$price) {
        $this->connect();
        $qry="INSERT INTO furniture(cat_name,f_name,price) VALUES('$cat_name','$f_name','$price');";
        $res = mysqli_query($this->con_res,$qry); //boolean
        return $res;
    }

    public function select(){
        $this->connect();
        $query = "SELECT * FROM furniture;";

        $res = mysqli_query($this->con_res,$query);
        
        return $res;
    }

    public function delete($id){
        $this->connect();
        $query = "DELETE FROM furniture WHERE id=$id;";

        $res = mysqli_query($this->con_res,$query);
        return $res;
    }
}
?>