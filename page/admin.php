<?php
 //model
  include '../model/AdminModel.php';

  //global variable 
	$page['page'] = 'Admin';
	$page['subpage'] = isset($_GET['subpage'])? $_GET['subpage']:'Dashboard' ;
	
	session_start();

	if(isset($_SESSION['user_email'])){
		//check for an action
		if (isset($_GET['function'])){
			//instanciate
			new ActiveDashboard($page);
		}else{
			//instanciate
			new Dashboard($page);
		}  
	}else{
		header("Location: ../page/Home.php");
	}
    class Dashboard{     
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
        function Dashboard(){

			//$carousel = $this->homeModel->homeCarousel();
			//$hero = $this->homeModel->homeHero();
			
			//get all the message
			$SeenMsg = $this->AdminModel->getmsg();

            $Seenprofile = $this->AdminModel->Homeprofile();

			include '../view/Dashboard.php'; //get the views
		}
    }

    class ActiveDashboard{
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

        function Deletemsg(){
			//get all the message
			$deletemsg = $this->AdminModel->deletemsg($_GET['delete_id']);
			$SeenMsg = $this->AdminModel->getmsg();
             $Seenprofile = $this->AdminModel->Homeprofile();


			include '../view/Dashboard.php'; //get the views
			echo '<script>alert("Message has been deleted!");</script>';
		}
	
    }
?>
