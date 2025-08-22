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
     <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
            <!-- Bootstrap CSS -->
     <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome 6.5.0 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">



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
  width: 60%;
  margin: 0 auto;
  margin-top: 30px;

}
.gradient-custom {
/* fallback for old browsers */
background: #6a11cb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}

.rounded-circle {
    box-shadow: 0 0 15px rgba(0, 255, 255, 0.6);
    transition: transform 0.3s ease;
}
.rounded-circle:hover {
    transform: scale(1.05);
}
  .bd-placeholder-img{
    font-size:1.125rem;
    text-anchor:middle;
    -webkit-user-select:none;
    -moz-user-select:none;
    user-select:none
  }
  @media(min-width: 768px){
    .bd-placeholder-img-lg{font-size:3.5rem}
  }
  .b-example-divider{
    width:100%;
    height:3rem;background-color:#0000001a;
    border:solid rgba(0,0,0,.15);
    border-width:1px 0;
    box-shadow:inset 0 .5em 1.5em #0000001a,inset 0 .125em .5em #00000026
  }
  .b-example-vr{
    flex-shrink:0;
    width:1.5rem;
    height:100vh
  }
  .bi{
    vertical-align:-.125em;
    fill:currentColor
  }
  .nav-scroller{
    position:relative;
    z-index:2;
    height:2.75rem;
    overflow-y:hidden
  }
  .nav-scroller
  .nav{
    display:flex;
    flex-wrap:nowrap;
    padding-bottom:1rem;
    margin-top:-1px;
    overflow-x:auto;
    text-align:center;
    white-space:nowrap;
    -webkit-overflow-scrolling:touch
  }
  .btn-bd-primary{
    --bd-violet-bg: #712cf9;
    --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
    --bs-btn-font-weight: 600;
    --bs-btn-color: var(--bs-white);
    --bs-btn-bg: var(--bd-violet-bg);
    --bs-btn-border-color: var(--bd-violet-bg);
    --bs-btn-hover-color: var(--bs-white);
    --bs-btn-hover-bg: #6528e0;
    --bs-btn-hover-border-color: #6528e0;
    --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
    --bs-btn-active-color: var(--bs-btn-hover-color);
    --bs-btn-active-bg: #5a23c8;
    --bs-btn-active-border-color: #5a23c8
  }
  .bd-mode-toggle{
    z-index:1500
  }
  .bd-mode-toggle
  .bi{
    width:1em;height:1em
  }
  .bd-mode-toggle .dropdown-menu .active .bi{
    display:block!important
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
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link <?= ($this->page == 'Home') ? 'active bg-gradient-primary' : '' ?>" href=" ../?page=home">
                        Home
                      </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($this->page== 'CTT') ? 'active bg-gradient-primary' : '' ?>" href="CTT.php?">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($this->page== 'SVC') ? 'active bg-gradient-primary' : '' ?>" href="SVC.php?">Service</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link <?= ($this->page == 'PFL')  ? 'active bg-gradient-primary' : '' ?>" href="PFL.php?">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>