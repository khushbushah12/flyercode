<?php

class Database
{

    public $conn;
    private $servername = "127.0.0.1";
    private $username = "root";
    private $password = "mysql";
    private $dbname = "khushbu_Ecommerse";

    function  __construct()
    {


        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        } else {
            //echo "connect successfully";
        }
    }

    public function  isTableExist($table)
    {


        $result = $this->conn->Query("SHOW TABLES LIKE'" . $table . "'");

        if ($result) {
            return true;
        } else {
            return false;
        }

    }

    public function executeQuery($query)
    {

        if ($this->conn->query($query) === TRUE) {
            //echo "TRUE";
            return true;

        } else {
            //echo "ERROR" . $this->conn->error;
            return false;
        }
    }


    public function  select($table, $cond = 1, $other = "")
    {

        if ($this->isTableExist($table)) {
            $i = 0;
            if ($cond != 1) {
                foreach ($cond as $key => $value) {
                    $keyvalue[$i++] = $key . " = " . "'" . $value . "'";
                }
                $keyvalue = implode(" AND ", $keyvalue);
                $sql = "SELECT * FROM " . $table . " where " . $keyvalue . " " . $other;

            } else {
                $sql = "SELECT * FROM " . $table . " " . $other;
            }


            $select_result = $this->conn->query($sql);
            if ($select_result->num_rows > 0) {
                if ($select_result->num_rows > 1) {
                    while ($array = $select_result->fetch_assoc()) {
                        $temp[] = $array;
                    }
                    return $temp;
                } else {
                    return $select_result->fetch_assoc();
                }
            } else {
                return 0;
            }

        } else {
            echo "NO TABLE FOUND";
            return false;
        }

    }



    public function  search($table, $cond = "", $other = "")
    {


        if ($this->isTableExist($table)) {

            if ($cond != "") {

                $sql = "SELECT * FROM product where product_name  ='".$cond."' ";
               // echo $sql; exit;


            } else {

                $sql = "SELECT * FROM " . $table . " " . $other;

            }

            $t = $this->conn->query($sql);

            if ($t->num_rows > 0) {
                    while ($array = $t->fetch_assoc()) {
                        $temp[] = $array;
                    }
                    return $temp;

            } else {
                return false;
            }
           /* $results = mysqli_query($this->conn,$sql);
            while ($row = mysqli_fetch_array($results)) {
                $prod[]  = $row;
            }
            return $prod;*/



        } else {
            echo "NO TABLE FOUND";
            return false;
        }

    }
    public function insert($table, $data)
    {

        if ($this->isTableExist($table)) {

            $key = implode(",", array_keys($data));
            $val = array_values($data);
            $i = 0;
            foreach ($val as $v) {
                $value[$i++] = "'" . $v . "'";
            }
            $value = implode(",", $value);
            $sql = "INSERT INTO " . $table . "(" . $key . ") values(" . $value . ")";

            $query_result = $this->executeQuery($sql);

            if($query_result){
                return $this->conn->insert_id;

            }
            else{
                return false;
            }
        } else {
            echo "TABLE NOT EXIST";
            return false;
        }
    }

}

?>