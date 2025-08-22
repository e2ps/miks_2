<?php
    include '../model/Lgmodel.php';
  //global variable 
	$page['page'] = 'PFL';
	$page['subpage'] = isset($_GET['subpage'])? $_GET['subpage']:'login' ;
	
	session_start();

	if(!isset($_SESSION['user_email'])){
		//check for an action
		if (isset($_GET['function'])){
			//instanciate
			new ActivePFL($page);
		}else{
			//instanciate
			new PFL($page);
		}
	}else{
		header('Location: ../page/admin.php');
	}

    class PFL{
		private $page = '';
		private $subpage = '';
		
		//constructor
		function __construct ($page){
			$this->page = $page['page']; //assigned the property value
			$this->subpage = $page['subpage']; //assigned the property value
			
			//run the method/behaviour
			$this->{$page['subpage']}();
		}
		
		function login(){
			
			include '../view/login.php'; //get the views
		}
	}

    	class ActivePFL{
		//encapsulation
		private $page = '';
		private $subpage = '';
		protected $Lgmodel = '';
		
		//constructor
		function __construct ($page){
			$this->page = $page['page']; //assigned the property value
			$this->subpage = $page['subpage']; //assigned the property value
			$this->Lgmodel = new Lgmodel();
			
			//run the method/behaviour
			$this->{$_GET['function']}();
		}
            
		function login(){
			
			//instantciate object
			$Email = $this->Lgmodel->getEmail($_POST['Email']);
			
			$pass = 0;
			foreach ($Email as $password){
				if (password_verify($_POST['Pass'], $password['password'])){
					session_start();
					$_SESSION['user_email'] = $password['email'];
					header('location: ../page/admin.php');
					$pass = 1;
				}
			}
			//check for if pass value changed to 1, meaning username or password been found
			if ($pass == 0){
				echo "<script>alert('Invalid Username of Password!');</script>";
				/*echo "<script>window.history.back(-1);</script>";*/
			}
			
			include '../view/login.php'; //get the views
		}
    }


?>