

<?php
  require_once('database/process.php');

	$hero_sql = "SELECT * FROM card_tb";
	$hero_query = mysqli_query($conn, $hero_sql);
	$card = mysqli_fetch_all($hero_query);
	//print_r($card);

  $carousel_sql = "SELECT * FROM carousel_tb";
	$carousel_query = mysqli_query($conn, $carousel_sql);
	$carousel = mysqli_fetch_all($carousel_query);
	//print_r($carousel);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
.btn-outline-light:hover {
    background-color: blue;
    color: #ffffffff;
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.6);
    transition: all 0.3s ease;
  }

.blur {
background-color: rgba(0, 0, 0, 0.51);
  border-radius: 20px;
  box-shadow:0px 5px 10px gray;
  text-shadow: 0px 0px 10px gray; 
  font-size: 20px;
}
#carouselExampleCaptions{
  width: 80%;
  margin: 0 auto;
  margin-top: 30px;

}
</style>
  </head>
  <body>
    
<header>
        <!-- Navbar -->
    <nav class="navbar bg-dark navbar-expand-lg sticky-top" data-bs-theme="dark">
        <div class="container p-3">
            <a class="navbar-brand" href="#">MIK'S</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php $activePage = $_GET['page'] ?? ''; ?>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link <?= $activePage === 'index' ? 'active bg-gradient-primary' : '' ?>" href="./index.php?page=index">
                        Home
                      </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $activePage === 'Contact' ? 'active bg-gradient-primary' : '' ?>" href="./contact.php?page=Contact">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link <?= $activePage === 'Admin' ? 'active bg-gradient-primary' : '' ?>" href="./login.php?page=Admin">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>