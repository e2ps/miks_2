<?php
 //model
  include '../model/AdminModel.php';

  //global variable 
	$page['page'] = 'Home';
	$page['subpage'] = isset($_GET['subpage'])? $_GET['subpage']:'home' ;
	
	session_start();

	if(isset($_SESSION['user_email'])){
	//check for an action
		if (isset($_GET['function'])){
			//instanciate
			new Activehome($page);
		}else{
			//instanciate
			new home($page);
		}  
	}else{
		header("Location: ../page/Home.php");
	}

    class home{     
		private $page = '';
		private $subpage = '';
		protected $AdminModel = '';
		//protected $Homemodel = '';
		
		//constructor
		function __construct ($page){
			$this->page = $page['page']; //assigned the property value
			$this->subpage = $page['subpage']; //assigned the property value
			
			$this->AdminModel = new AdminModel(); //instance/object
			//$this->Homemodel = new Homemodel(); //instance/object
			
			//run the method/behaviour
			$this->{$page['subpage']}();
		}
        function home(){

			//$carousel = $this->homeModel->homeCarousel();
			//$hero = $this->homeModel->homeHero();
			
			//get all the message
			$card = $this->AdminModel->homecard();
            $carousel = $this->AdminModel->homecarousel();
            $Seenprofile = $this->AdminModel->Homeprofile();

			include '../view/home.php'; //get the views
		}
    }

    class Activehome{
		//encapsulation
		private $page = '';
		private $subpage = '';
		protected $AdminModel = '';
		//protected $Homemodel = '';

        function __construct ($page){
			$this->page = $page['page']; //assigned the property value
			$this->subpage = $page['subpage']; //assigned the property value
			
			$this->AdminModel = new AdminModel(); //instance/object
			//$this->Homemodel = new Homemodel(); //instance/object
			
			//run the method/behaviour
			$this->{$_GET['function']}();
		}

        function home(){
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $title    = $_POST['title'] ?? '';
                $desc     = $_POST['desc'] ?? '';
                $img      = $_POST['img'] ?? '';
                $id       = $_POST['id'] ?? ''; 

                $success = $this->AdminModel->homecardUP($title, $desc, $img, $id);

                if ($success) {
                    
                } else {
                    echo "<div class='alert alert-danger text-center'> Something went wrong. Please try again.</div>";
                }
		    }
            $card = $this->AdminModel->homecard();
            $carousel = $this->AdminModel->homecarousel();
            $Seenprofile = $this->AdminModel->Homeprofile();
            include '../view/home.php';
        }

		function deletehomecard(){
			$deletehomecard = $this->AdminModel->deletehomecard($_GET['delete_id1']);
            $carousel = $this->AdminModel->homecarousel();
            $Seenprofile = $this->AdminModel->Homeprofile();
			$card = $this->AdminModel->homecard();
            include '../view/home.php';
			echo '<script>alert("card has been deleted!");</script>';
		}

		function Inserthomecard(){
			if($_SERVER['REQUEST_METHOD'] === 'POST'){
				$card_id		= $_POST['id'] ?? '';
				$card_title		= $_POST['title'] ?? '';
				$card_prg		= $_POST['desc'] ?? '';
				$card_img		= $_POST['img'] ?? '';

				$insertSCC = $this->AdminModel->INSERThomecard($card_title, $card_prg, $card_img);
				if($insertSCC) {
					 echo '<script>alert("Insert New Card Was successfull!");</script>';
				} else {
                    echo "<div class='alert alert-danger text-center'> Something went wrong. Please try again.</div>";
                }
			}
			$card = $this->AdminModel->homecard();
            $carousel = $this->AdminModel->homecarousel();
            $Seenprofile = $this->AdminModel->Homeprofile();
            include '../view/home.php';
		}

		#----------------|----------------------|-----------------#
        #----------------|-Admin Home carousel--|-----------------#
        #----------------V----------------------V-----------------#

		 function homecarouse(){
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $title    = $_POST['title1'] ?? '';
                $desc     = $_POST['desc1'] ?? '';
                $img      = $_POST['img1'] ?? '';
                $id       = $_POST['id1'] ?? ''; 

                $success1 = $this->AdminModel->homecarouselUP($title, $desc, $img, $id);

                if ($success1) {
                    
                } else {
                    echo "<div class='alert alert-danger text-center'> Something went wrong. Please try again.</div>";
                }
		    }
            $card = $this->AdminModel->homecard();
            $carousel = $this->AdminModel->homecarousel();
            $Seenprofile = $this->AdminModel->Homeprofile();
            include '../view/home.php';
        }

		function deletehomecarouse(){
			//get all the messages
			$deletehomecarouse = $this->AdminModel->deletehomecarouse($_GET['delete_id2']);
            $carousel = $this->AdminModel->homecarousel();
            $Seenprofile = $this->AdminModel->Homeprofile();
			$card = $this->AdminModel->homecard();
            include '../view/home.php';
			echo '<script>alert("card has been deleted!");</script>';
			exit();
		}

		function Inserthomecarouse(){
			if($_SERVER['REQUEST_METHOD'] === 'POST'){
				$card_id		= $_POST['id2'] ?? '';
				$card_title		= $_POST['title2'] ?? '';
				$card_prg		= $_POST['desc2'] ?? '';
				$card_img		= $_POST['img2'] ?? '';

				$insertSCC = $this->AdminModel->INSERThomecarouse($card_title, $card_prg, $card_img);
				if($insertSCC) {
					 echo '<script>alert("Insert New carouse Was successfull!");</script>';
				} else {
                    echo "<div class='alert alert-danger text-center'> Something went wrong. Please try again.</div>";
                }
			}
			$card = $this->AdminModel->homecard();
            $carousel = $this->AdminModel->homecarousel();
            $Seenprofile = $this->AdminModel->Homeprofile();
            include '../view/home.php';
		}
    }
?>