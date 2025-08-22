<?php
    include "db_connect.php";

    class Homemodel extends Connector{
        function __construct(){
            parent:: __construct();
        }
        
        function Homecarousel(){
            $sqlcarousel = "SELECT * FROM carousel_tb";

            $query = $this->conn->prepare($sqlcarousel);
            $query->execute();

            return $query->fetchall(PDO::FETCH_ASSOC); //get all the data and return
        }
        function homecard(){

            $sqlcard = "SELECT * FROM card_tb";

            $query = $this->conn->prepare($sqlcard);
            $query->execute();

            return $query->fetchall(PDO::FETCH_ASSOC);
        }

        public function message($fullname, $email, $message, $txtPhone) {
            $sql = "INSERT INTO msg_tb (fullname, Email, message, txtPhone) VALUES (?, ?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute([$fullname, $email, $message, $txtPhone]);
        }

        //function getmsg(){
        //    $sqlmsg = "SELECT * FROM msg_tb";

        //    $query = $this->conn->prepare($sqlmsg);
        //    $query->execute();

        //    return $query->fetchall(PDO::FETCH_ASSOC); //get all the data and return
        //}
    }



?>
