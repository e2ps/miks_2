<?php
 //model
  include '../model/Homemodel.php';

  //global variable 
	$page['page'] = 'Home';
	$page['subpage'] = isset($_GET['subpage'])? $_GET['subpage']:'home' ;
	
	session_start();

	if(!isset($_SESSION['user_email'])){
	//check for an action
		if (isset($_GET['function'])){
			//instanciate
			new ActiveHome($page);
		}else{
			//instanciate
			new Home($page);
		}   
	}else{
		header('Location: ../page/admin.php');
	}
    class Home{     
		private $page = '';
		private $subpage = '';
		protected $Homemodel = '';

        function __construct($page){
            $this->page = $page ['page'];
             $this->subpage = $page ['subpage'];

            $this-> Homemodel = new Homemodel();

            $this->{$page['subpage']}();
        }

        function home(){
            $carousel = $this->Homemodel->Homecarousel();

			 $card = $this->Homemodel->homecard();

			///$feedMsg = $this->Homemodel->getmsg();

            include '../view/index.php'; //get the views
        }
	
    }

    //if there is an action
	class ActiveHome{
		//encapsulation
		private $page = '';
		private $subpage = '';
		
	}
?>