<?php
 //model
  include '../model/AdminModel.php';

  //global variable 
	$page['page'] = 'PF';
	$page['subpage'] = isset($_GET['subpage'])? $_GET['subpage']:'profile' ;
	
	session_start();

	if(isset($_SESSION['user_email'])){
	//check for an action
		if (isset($_GET['function'])){
			//instanciate
			new Activeprofile($page);
		}else{
			//instanciate
			new profile($page);
		}  
	}else{
		header("Location: ../page/Home.php");
	}

    class profile{     
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
        function profile(){

            $profile = $this->AdminModel->Homeprofile();
                        $Seenprofile = $this->AdminModel->Homeprofile();

			include '../view/profile.php'; //get the views
		}
    }

    class ActiveDashboard{
		//encapsulation
		private $page = '';
		private $subpage = '';
    }
?>
