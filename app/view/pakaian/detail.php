<div class="container mt-5">

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $data["pakaian"]["nama"]; ?></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary"><?= $data["pakaian"]["nrp"]; ?></h6>
    <p class="card-text"><?= $data["pakaian"]["email"]; ?></p>
    <p class="card-text"><?= $data["pakaian"]["jurusan"]; ?></p>
    <a href="<?= BASEURL; ?>/pakaian" class="card-link">kembali</a>
  </div>
</div>

</div>