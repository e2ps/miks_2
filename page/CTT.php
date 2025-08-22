<?php
    include '../model/Homemodel.php';
  //global variable 
	$page['page'] = 'CTT';
	$page['subpage'] = isset($_GET['subpage'])? $_GET['subpage']:'Contact' ;
	
    session_start();

	if(!isset($_SESSION['user_email'])){
	//check for an action
        if (isset($_GET['function'])){
            //instanciate
            new ActiveCTT($page);
        }else{
            //instanciate
            new CTT($page);
        }
    }else{
		header('Location: ../page/admin.php');
	}
    
    class CTT{
		private $page = '';
		private $subpage = '';
		
		//constructor
		function __construct ($page){
			$this->page = $page['page']; //assigned the property value
			$this->subpage = $page['subpage']; //assigned the property value
			
			//run the method/behaviour
			$this->{$page['subpage']}();
		}
		
		function Contact(){


			include '../view/contact.php'; //get the views
		}
	}
    class ActiveCTT{
        		//encapsulation
		private $page = '';
		private $subpage = '';
        protected $Homemodel = '';

        function __construct ($page){
			$this->page = $page['page']; //assigned the property value
			$this->subpage = $page['subpage']; //assigned the property value
			$this->Homemodel = new Homemodel();
			
			//run the method/behaviour
			$this->{$_GET['function']}();
		}

        public function Contact() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $fullname = $_POST['fullname'] ?? '';
                $email = $_POST['email'] ?? '';
                $txtPhone = $_POST['txtPhone'] ?? '';
                $message = $_POST['message'] ?? '';
            
                // Insert message using model
                $success = $this->Homemodel->message($fullname, $email, $message, $txtPhone);
            
                // Optional feedback
                if ($success) {
                    echo "<div class='alert alert-success text-center'> Message sent successfully!</div>";
                    header ("Location: CTT.php");
                } else {
                    echo "<div class='alert alert-danger text-center'> Something went wrong. Please try again.</div>";
                }
            }
            include '../view/contact.php'; //get the views
        }
    }

        //    if (isset($_POST['btnSubmit'])) {
    //    // Get and sanitize inputs
    //    $FullName = htmlspecialchars(trim($_POST['fullname']), ENT_QUOTES, 'UTF-8');
    //    $email = htmlspecialchars(trim($_POST['Email']), ENT_QUOTES, 'UTF-8');
    //    $Message = htmlspecialchars(trim($_POST['message']), ENT_QUOTES, 'UTF-8');
    //    $txtPhone = htmlspecialchars(trim($_POST['txtPhone']), ENT_QUOTES, 'UTF-8');
//
    //    // Validate inputs
    //    if (!empty($email) && !empty($Message) && !empty($txtPhone)) {
//
    //        // Validate email format
    //        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //            echo "<div class='alert alert-danger'>Invalid email format.</div>";
    //        } else {
    //            $sql = "INSERT INTO msg_tb(fullname, Email, message, txtPhone) VALUES (?, ?, ?, ?)";
    //            $stmt = mysqli_stmt_init($conn);
//
    //            if (mysqli_stmt_prepare($stmt, $sql)) {
    //                mysqli_stmt_bind_param($stmt, "sssi", $FullName, $email, $Message, $txtPhone);
    //                mysqli_stmt_execute($stmt);
//
    //                // Optional: send email notification
    //                // mail("your@email.com", "New message from $FullName", $Message, "From: $email");
//
    //                echo "<div class='alert alert-success'>Message sent successfully.</div>";
    //                        header("Location: contact.php");
    //                        exit();
    //                // Prevent form resubmission on refresh
    //            } else {
    //                die("<div class='alert alert-danger'>Something went wrong with the SQL statement.</div>");
    //            }
    //        }
    //    } else {
    //        echo "<div class='alert alert-danger'>Please fill out all fields.</div>";
    //    }
    //}
?>