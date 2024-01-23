<div class="container mt-3">
<img src="<?=BASEURL; ?>/img/logoFikom.png" alt="" width="300px">


  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash() ?>

    </div>
  </div>

    <div class="row">
    <
        <div class="col-lg-6 mt-5">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
            tambah data 
            </button>
            <br><br>
            <h3>Aturan Pakaian</h3>
            <img src="<?=BASEURL; ?>/img/cowok.png" alt="" width="200px ">
            <img src="<?=BASEURL; ?>/img/cewek.png" alt="" width="200px ">
            <ul class="list-group">

            <?php foreach($data["pakaian"] as $pakaian) : ?>
              <li class="list-group-item">
                <?= $pakaian["nama"]; ?>
                <a href="<?= BASEURL; ?>/pakaian/hapus/<?= $pakaian["id"];?>" class="badge text-bg-danger float-end mx-2" onclick="return confirm('yakin?');">hapus</a>
                <a href="<?= BASEURL; ?>/pakaian/ubah/<?= $pakaian["id"];?>" class="badge text-bg-success float-end tampilModalUbah mx-2"data-bs-toggle="modal" data-bs-target="#formModal">ubah</a>
                <a href="<?= BASEURL; ?>/pakaian/detail/<?= $pakaian["id"];?>" class="badge text-bg-primary float-end mx-2">detail</a>
                
            </li>

            <?php endforeach; ?>
            
            </ul>
            
        </div>
        
    </div>
   

</div>



<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judul modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judul modal">Tambah Data Pakaian</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
          <form action="<?= BASEURL; ?>/pakaian/tambah" method="post">
            <div class="form-group">
            <label for="nama" class="form-label">nama</label>
            <input type="text" class="form-control" id="nama"  name="nama" >
            </div>    

            <div class="form-group">
            <label for="nrp" class="form-label">NRP</label>
            <input type="number" class="form-control" id="nrp"  name="nrp" >
            </div>   
            
            <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email"  name="email" >
            </div>

            <div class="form-group">
                <label for="jurusan">jurusan</label>
                <select class="form-select" size="3" aria-label="Size 3 select example" name="jurusan">
                <option value="TI">TI</option>
                <option value="SI">SI</option>
                <option value="KES">KES</option>
                </select>
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>