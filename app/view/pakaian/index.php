<?php if ($_SESSION['role'] == 'asisten' || $_SESSION['role'] == 'admin' || $_SESSION['role'] == 'praktikan') { ?>
<div class="container mt-3">
  <img src="<?= BASEURL; ?>/img/logoFikom.png" alt="" width="300px">



  <div class="row mt-5 justify-content-center">
    <div class="col-lg-6">

      <br><br>

      <div class="d-flex justify-content-around">
        <img src="<?= BASEURL; ?>/img/pakaian/cowok.png" alt="" width="225px ">
        <img src="<?= BASEURL; ?>/img/pakaian/cewek.png" alt="" width="225px ">
      </div>

      <div class="d-flex mt-3">
        <ul class="list-group list-group-horizontal d-flex flex-row">
          <?php foreach ($data["pakaian"] as $pakaian): ?>
            <li class="list-group-item m-5">
              <?= $pakaian["nama"]; ?>
              <a href="<?= BASEURL; ?>/pakaian/detail/<?= $pakaian["id"]; ?>"
                class="badge text-primary float-end mx-2">detail</a>
            </li>
          <?php endforeach; ?>
        </ul>



      </div>
    </div>
  </div>
</div>

<?php } else {
    // Jika role tidak sesuai, redirect ke halaman login
    header("Location: " . BASEURL . "/login"); // Sesuaikan dengan path login yang sesuai di aplikasi Anda
    exit();
}?>