<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data["judul"]; ?></title>
    <link rel="stylesheet" href="<?=BASEURL; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    />

</head>
<body>
  
<style>
  .navbar-custom {
    background-color: #092635; 
    z-index: 99;
    height: 90px;
    
  }

  body{
    background-image: url("<?=BASEURL; ?>/img/ds.jpg");
    background-size: cover;
    
  }

  a:hover {
    outline: 2px solid #ffff; 
    border-radius: 5px; 
   
}

  .btn{
    width: 8rem;
  }

</style>

<nav class="navbar navbar-expand-lg navbar-custom text-light opacity-75">
 <div class="container-fluid">
   <a class="navbar-brand" href="#">
     <img src="<?=BASEURL; ?>/img/logo.png" alt="Logo" width="50" height="40" class="d-inline-block align-text-top">
   </a>
   <a class="navbar-brand text-white"  href="<?=BASEURL; ?>/about" >ProTechLab</a>
   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
   
   <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
     <div class="navbar-nav ms-auto">
       <a class="nav-link active text-white" aria-current="page" href="<?=BASEURL; ?>/home" style= "margin-right: 30px;" >Beranda</a>
       <a class="nav-link text-white" href="<?=BASEURL; ?>/menu" style= "margin-right: 30px;" >Menu</a>
       <a class="nav-link text-white" href="<?=BASEURL; ?>/tatib" style= "margin-right: 30px;" >Tata Tertib</a>
       <a class="nav-link text-white" href="<?=BASEURL; ?>/about" style= "margin-right: 30px;">Tentang</a>
       <a class="nav-link text-white" href="<?=BASEURL; ?>/pakaian" style= "margin-right: 100px;">Pakaian</a>

       <div class="dropdown">
          <a class="nav-link text-white dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" aria-expanded="false" data-bs-toggle="dropdown">
              Log-out
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
              <li>
                  <a class="dropdown-item" href="#"><i class="bi bi-person-circle"></i> My profile</a>
              </li>
              <div class="divider dropdown-divider"></div>
              <li class="d-flex align-items-center">
                  <a class="dropdown-item" href="<?= BASEURL; ?>/login/logout">
                  <i class="bi bi-box-arrow-right"></i> Log Out
                  </a>
              </li>
          </ul>
      </div>


     </div>
   </div>
 </div>
 
</nav>





