<div class="container mt-2">
  <img src="<?= BASEURL; ?>/img/logoFikom.png" alt="" width="300px">


  
  
  <p></p>
  <div class="row">
    <div class="col-sm-3">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Total Pelanggaran</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">peringatan</h6>
          <p class="card-text" style="font-size: 30px;"><?php echo $data["data"]; ?></p>
        </div>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Total Pelanggaran</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">Menghadap</h6>
          <p class="card-text" style="font-size: 30px;">12</p>
        </div>
      </div>
    </div>
  </div>

  <p></p>
  <div class="col-sm-3">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Total Pelanggaran</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">Black-List</h6>
        <p class="card-text" style="font-size: 30px;">0</p>
      </div>
    </div>
  </div>



</div>