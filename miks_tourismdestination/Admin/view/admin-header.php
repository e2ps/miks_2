<?php
require_once('../database/Admin-process.php');
	#--------------------------------------------------------------#
	#-- Hero Featured destination								 --#
	#--------------------------------------------------------------#
	//get hero featured destination sql
	$hero_sql = "SELECT * FROM users_tb";
	$hero_query = mysqli_query($conn, $hero_sql);
	$pf = mysqli_fetch_all($hero_query);
	//print_r($pf);

session_start();
if(!isset($_SESSION["user"])){
header("Location:  http://localhost/Sabillo/miks_tourismdestination/view/login.php?page=Admin");
die();
 }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
   <style>
    body, html {
      height: 100%;
      margin: 0;
    }
    .sidebar {
      height: 100vh;
  
    }
    .nav-link {
      color:white !important;
      transition: all 0.3s ease;
    }

    .nav-link:hover {
      background-color: white;
      border-radius: 0.25rem;
      color:black !important;
    }
    #table{
    min-width: 60%; 
    margin: auto;
    
}
.table1 tr th{
    border: 1px solid black;
    color: black;
    text-align: center
}

.table2 tr td{
    border: 1px solid black;
    color: black;
    text-align: center;
    
}

#msg{
    text-align: justify;
    padding: 20px;
}
.gradient-custom {
/* fallback for old browsers */
background: #f6d365;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
}
</style>
  </style>

  </head>
  <body>
        <nav class="navbar navbar-expand-lg bg-dark border-bottom shadow" data-bs-theme="dark">
            <div class="container py-3 text-center">
                <a class="navbar-brand mx-auto" href="#">MIK'S Admin Dashbord</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle sidebar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <!-- Navbar -->    
<div class="container-fluid">
    <div class="row">
              <div class="container-fluid">
                <div class="row">
                  <!-- Sidebar -->
                  <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse sticky-top">
                    <div class="position-sticky pt-3">
                      <?php $activePage = $_GET['page'] ?? ''; ?>

                      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-white">
                        <span>MAIN</span>
                      </h6>

                      <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                          <a class="nav-link <?= $activePage === 'Dashboard' ? 'active bg-gradient-primary' : 'text-white' ?>" href="./index.php?page=Dashboard">
                            <i class="bi bi-speedometer2 me-2"></i> Dashboard
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link <?= $activePage === 'Home_card' ? 'active bg-gradient-primary' : 'text-white' ?>" href="./home.php?page=Home_card">
                            <i class="bi bi-house me-2"></i> Home card
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link text-white">
                            <i class="bi bi-table me-2"></i> Orders
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link text-white">
                            <i class="bi bi-grid me-2"></i> Products
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link text-white">
                            <i class="bi bi-people me-2"></i> Customers
                          </a>
                        </li>
                      </ul>

                      <hr>

                      <!-- User dropdown -->
                      <div class="dropdown px-3">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                          <img src="<?= $pf[0][1] ?>" alt="User Avatar" width="32" height="32" class="rounded-circle me-2">
                          <strong>mdo</strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                          <li><a class="dropdown-item" href="#">New project...</a></li>
                          <li><a class="dropdown-item" href="#">Settings</a></li>
                          <li><a class="dropdown-item <?= $activePage === 'Profile' ? 'active bg-gradient-primary' : '' ?>" href="./profile.php?page=Profile">Profile</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
                        </ul>
                      </div>
                    </div>
                  </nav>

                  <!-- Main Content -->
                  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
   

      
