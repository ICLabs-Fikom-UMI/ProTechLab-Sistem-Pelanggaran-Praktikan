<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman <?= $data["judul"]; ?></title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
  <style>
    .navbar-custom {
      background-color: #092635;
      z-index: 99;
      height: 90px;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="<?= BASEURL; ?>/img/logo.png" alt="Logo" width="50" height="40" class="d-inline-block align-text-top">
      </a>
      <a class="navbar-brand text-white" href="<?= BASEURL; ?>/about">ProTechLab</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
              id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="d-none d-sm-inline mx-1">Log-in</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
              <div class="divider dropdown-divider"></div>
              <li class="d-flex align-items-center">
                <a class="dropdown-item" href="<?= BASEURL; ?>/login">
                  <i class="fa-solid fa-right-to-bracket"></i> Log-in
                </a>
              </li>
              <li>
                <?php if ($_SESSION['role'] == 'asisten' || $_SESSION['role'] == 'admin') { ?>
                  <a class="dropdown-item" href="<?= BASEURL; ?>/login/logout">
                    <i class="bi bi-box-arrow-right"></i> Log-Out
                  </a>
                <?php } ?>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row flex-nowrap">
      <div class="col-auto col-md-3 col-xl-2 px-sm-5 px-0 bg-dark">
        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
          <br><br>
          <a href="#" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-5 d-none d-sm-inline">Menu</span>
          </a>

          <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item">
              <a href="<?= BASEURL; ?>/home" class="nav-link align-middle px-0 text-white ">
                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
              </a>
            </li>

            <br>

            <li>
              <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white">
                <i class="fs-4 bi-grid "></i> <span class="ms-1 d-none d-sm-inline">Fitur</span></a>
              <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                <?php if ($_SESSION['role'] == 'asisten' || $_SESSION['role'] == 'admin') { ?>
                  <li class="w-100">
                    <a href="<?= BASEURL; ?>/menu/index/" class="nav-link px-0 text-white" data-bs-toggle="modal"
                      data-bs-target="#formModal"> <span class="d-none d-sm-inline">Lapor</span></a>
                  </li>
                <?php } ?>
                <?php if ($_SESSION['role'] == 'admin') { ?>
                  <li>
                    <a href="<?= BASEURL; ?>/menu/tindak/" class="nav-link px-0 text-white"> <span
                        class="d-none d-sm-inline">Tindak</span></a>
                  </li>
                  <li>
                    <a href="<?= BASEURL; ?>/menu/edit/" class="nav-link px-0 text-white"> <span
                        class="d-none d-sm-inline">Tambah Frekuensi</span></a>
                  </li>
                <?php } ?>
                <li>
                  <a href="<?= BASEURL; ?>/menu/lihat/" class="nav-link px-0 text-white"> <span
                      class="d-none d-sm-inline">Lihat</span></a>
                </li>
              </ul>
            </li>

            <br>

            <li>
              <a href="<?= BASEURL; ?>/tatib" class="nav-link px-0 text-white align-middle">
                <i class="fa-solid fa-file-lines fa-lg me-2" style="color: #ffffff;"></i><span
                  class="ms-1 d-none d-sm-inline">Tata Tertib</span></a>
            </li>

            <br>

            <li>
              <a href="<?= BASEURL; ?>/about" class="nav-link px-0 text-white align-middle">
                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">About</span></a>
            </li>

            <br>
          </ul>
          <hr>
        </div>
      </div>
      <div class="col py-3">
