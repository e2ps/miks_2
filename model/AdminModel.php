<?php
    include "db_connect.php";

        class AdminModel extends Connector{
        function __construct(){
            parent:: __construct();
        }

        function Homeprofile(){
            $sqlprofile = "SELECT * FROM users_tb";

            $query = $this->conn->prepare($sqlprofile);
            $query->execute();

            return $query->fetchall(PDO::FETCH_ASSOC); //get all the data and return
        }

        #----------------------------------#
        #----------for the Message---------#
        #----------------------------------#
        function getmsg(){
            $sqlmsg = "SELECT * FROM msg_tb";

            $query = $this->conn->prepare($sqlmsg);
            $query->execute();

            return $query->fetchall(PDO::FETCH_ASSOC); //get all the data and return
        }
        #----------------------------------#
        #----------delete msg--------------#
        #----------------------------------#
        function deletemsg($id){
			//get hero featured destination sql
			$sql = "DELETE FROM msg_tb WHERE id = ?";
			
			$query = $this->conn->prepare($sql); //prepare the query
			$query->bindParam(1, $id);
			$query->execute(); //run the query
			
			return $this->conn->lastInsertId(); //return
		}
        #-------------------------------------------------------#
        #----------------Get the Admin Home card----------------#
        #-------------------------------------------------------#
        function homecard(){

            $sqlcard = "SELECT * FROM card_tb";

            $query = $this->conn->prepare($sqlcard);
            $query->execute();

            return $query->fetchall(PDO::FETCH_ASSOC);
        }
        #--------------------------------------------#
        #-----for the Admin UPDATE The Home card-----#
        #--------------------------------------------#
         function homecardUP($title, $desc, $img, $id) {
            $sqlcardUP = "UPDATE card_tb 
                          SET card_title = ?, 
                              card_prg = ?, 
                              card_img = ? 
                          WHERE card_id = ?";
        
            $query = $this->conn->prepare($sqlcardUP);
            return $query->execute([$title, $desc, $img, $id]);
        }

        #--------------------------------------#
        #--------delete Home card--------------#
        #--------------------------------------#

        function deletehomecard($card_id){
			//get hero featured destination sql
			$sql = "DELETE FROM card_tb WHERE card_id = ?";
			
			$query = $this->conn->prepare($sql); //prepare the query
			$query->bindParam(1, $card_id);
			$query->execute(); //run the query
			
			return $this->conn->lastInsertId(); //return
		}

        #-------------------------------------------------------#
        #------------GEt the Admin INSERT Home carousel----------------#
        #-------------------------------------------------------#

        function INSERThomecard($card_title, $card_prg, $card_img){
			//get hero featured destination sql
			$sql = "INSERT INTO `card_tb`( `card_title`, `card_prg`, `card_img`)
             VALUES (?,?,?)";
			
			$query = $this->conn->prepare($sql); //prepare the query

			return $query->execute([$card_title, $card_prg, $card_img]);
			}

        #-------------------------------------------------------#
        #------------GEt the Admin Home carousel----------------#
        #-------------------------------------------------------#

        function homecarousel(){

            $sqlcard = "SELECT * FROM carousel_tb";

            $query = $this->conn->prepare($sqlcard);
            $query->execute();

            return $query->fetchall(PDO::FETCH_ASSOC);
        }
        #---------------------------------------------------#
        #--------for the Admin UPDATE The Home carouse------#
        #---------------------------------------------------#
        function homecarouselUP($title, $desc, $img, $id){

            $carouselsql = " UPDATE carousel_tb
                            SET carousel_title = ?,
                                carousel_desc = ?,
                                carousel_img = ?
                            WHERE carousel_id = ?";

            $query1 = $this->conn->prepare($carouselsql);
            return $query1->execute([$title, $desc, $img, $id]);
        }

        #--------------------------------------#
        #--------delete Home carouse--------------#
        #--------------------------------------#

        function deletehomecarouse($card_id){
			//get hero featured destination sql
			$sql = "DELETE FROM carousel_tb WHERE carousel_id = ?";
			
			$query = $this->conn->prepare($sql); //prepare the query
			$query->bindParam(1, $card_id);
			$query->execute(); //run the query
			
			return $this->conn->lastInsertId(); //return
		}

        #-------------------------------------------------------#
        #------------GEt the Admin INSERT Home carousel----------------#
        #-------------------------------------------------------#

        function INSERThomecarouse($card_title, $card_prg, $card_img){
			//get hero featured destination sql
			$sql = "INSERT INTO `carousel_tb`( `carousel_title`, `carousel_desc`, `carousel_img`)
             VALUES (?,?,?)";
			
			$query = $this->conn->prepare($sql); //prepare the query

			return $query->execute([$card_title, $card_prg, $card_img]);
			}
    }

    ?>