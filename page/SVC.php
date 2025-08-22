<?php
  //global variable 
	$page['page'] = 'SVC';
	$page['subpage'] = isset($_GET['subpage'])? $_GET['subpage']:'Service' ;
	
	 session_start();

	if(!isset($_SESSION['user_email'])){
	//check for an action
		if (isset($_GET['function'])){
			//instanciate
			new ActiveSVC($page);
		}else{
			//instanciate
			new SVC($page);
		}
	}else{
		header('Location: ../page/admin.php');
	}

    class SVC{
		private $page = '';
		private $subpage = '';
		
		//constructor
		function __construct ($page){
			$this->page = $page['page']; //assigned the property value
			$this->subpage = $page['subpage']; //assigned the property value
			
			//run the method/behaviour
			$this->{$page['subpage']}();
		}
		
		function Service(){


			include '../view/service.php'; //get the views
		}
	}
?>