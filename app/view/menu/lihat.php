<?php if ($_SESSION['role'] == 'asisten' || $_SESSION['role'] == 'admin' || $_SESSION['role'] == 'praktikan') { ?>



        <!-- isi konten -->

        <div class="col py-3 bg-light ">
        <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash() ?>

    </div>
  </div>
            <h1>Tampilan lihat</h1>
            <br><br>

            

            <div class="row mb-3">
                <div class="col-lg-6">
                    <form action="<?= BASEURL; ?>/menu/cari" method="post">

                        <div class="hstack gap-3">
                            <input type="text" class="form-control" placeholder="cari mahasiswa.." name="keyword"
                                id="keyword" autocomplete="off">
                            <button type="button" class="btn btn-secondary">Cari</button>
                            <div class="vr"></div>
                            <a href="<?= BASEURL; ?>/menu/lihat/"  class="btn btn-outline-dark">refresh</a>
                            <?php if ($_SESSION['role'] == 'asisten'|| $_SESSION['role'] == 'admin') {?> 
                            <a href="<?= BASEURL; ?>/menu/index/"  class="btn btn-outline-dark">kembali</a>
                            <?php }?>
                        </div>
                       
                        

                    </form>
                </div>
            </div>


            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">no</th>
                        <th scope="col">nama</th>
                        <th scope="col">nim</th>
                        <!-- <th scope="col">id_frek</th> -->
                        <th scope="col">frekuensi</th>
                        <th scope="col">lab</th>
                        <th scope="col">deskripsi</th>
                        <th scope="col">Tanggal Pelaporan</th>

                    </tr>
                </thead>
                <?php foreach ($data["lapor"] as $lapor): ?>
                    <tbody>

                        <tr>
                            <th scope="row">
                                <?= $lapor["id_"]; ?>
                            </th>
                            <td>
                                <?= $lapor["nama_praktikan"]; ?>
                            </td>
                            <td>
                                <?= $lapor["nim"]; ?>
                            </td>
                            <!-- <td><?= $lapor["id_frek"]; ?></td> -->
                            <td>
                                <?= $lapor["frekuensi"]; ?>
                            </td>
                            <td>
                                <?= $lapor["lab"]; ?>
                            </td>
                            <td>
                                <?= $lapor["deskripsi"]; ?>
                            </td>
                            <td>
                                <?= $lapor["tanggal"]; ?>
                            </td>
                        </tr>

                    </tbody>
                <?php endforeach; ?>

            </table>
        </div>

         <!-- Modal -->
    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judul modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="judul modal">Tambah Data </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="<?= BASEURL; ?>/menu/lapor/" method="post">
                        <div class="mb-3">


                            <!--  coba -->

                            <div class="mb-3">
                                <label for="frekuensi">frekuensi</label>
                                <select class="form-select" aria-label="Default select example" name="frekuensi">
                                    <?php foreach ($data['frekuensi'] as $frekuensi): ?>
                                        <option value="<?= $frekuensi['id_frek']; ?>">
                                            <?= $frekuensi['nama_frek'] . ' - ' . $frekuensi['nama_lab']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="nama">Nama</label>
                                <select class="form-select" aria-label="Default select example" name="praktikan">
                                    <?php foreach ($data['praktikan'] as $praktikan): ?>
                                        <option value="<?= $praktikan['id_user']; ?>">
                                            <?= $praktikan['nama'] . ' - ' . $praktikan['nim']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>


                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">deskripsi</label>
                                <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="tanggal" class="form-label">tanggal</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal">
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Lapor</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
   


<?php } else {
    // Jika role tidak sesuai, redirect ke halaman login
    header("Location: " . BASEURL . "/login"); // Sesuaikan dengan path login yang sesuai di aplikasi Anda
    exit();
}?>


<!-- ini tampilan pertama -->


<!-- <label for="nama" class="form-label">nama</label>
                        <input type="text" class="form-control" id="nama"  name="nama" >
                        </div>    



                        <div class="mb-3">
                        <label for="nim" class="form-label">nim</label>
                        <input type="text" class="form-control" id="nim"  name="nim" >
                        </div>  

                        
                        <div class="mb-3">
                            <label for="frekuensi">frekuensi</label>
                            <select class="form-select" aria-label="Default select example" name="frekuensi">
                            <option selected>pilih</option>
                            <option value="1">TI_JARKOM-9</option>
                            <option value="1">TI_ALGO-1</option>
                            <option value="1">TI_ALGO-6</option>
                            
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="lab">lab</label>
                            <select class="form-select" aria-label="Default select example" name="lab">
                            <option selected>pilih</option>
                            <option value="1">Iot</option>
                            <option value="2">Start-up</option>
                            <option value="3">Multimedia</option>
                            <option value="4">Comnet</option>
                            <option value="5">Computer Vision</option>
                            <option value="6">Data Science</option>
                            <option value="7">Mikro</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">deskripsi</label>
                            <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea>
                        </div>

                        <div class="mb-3">
                        <label for="tanggal" class="form-label">tanggal</label>
                        <input type="date" class="form-control" id="tanggal"  name="tanggal" >
                        </div>   -->