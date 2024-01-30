<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark text-light opacity-75">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">

                <!-- menu -->
                <nav class="navbar mt-5">
                    <form class="container-fluid d-flex flex-column justify-content-start">
                        <a href="<?= BASEURL; ?>/menu/tindak/" class="btn btn-outline-success me-2" type="button">
                            <i class="bi bi-search me-2"></i>Tindak</button>
                        </a>
                        <br><br><br>

                        <a class="btn btn-outline-success me-2"><i class="bi bi-eye me-2"></i>lihat</a>
                        <br><br><br>

                    </form>
                </nav>

            </div>
        </div>


        <!-- isi konten -->

        <div class="col py-3 bg-light ">
            <h1>Daftar Tindak Lanjut</h1>
            <br><br>

            <a class="btn btn-outline-success me-2" data-bs-toggle="modal" data-bs-target="#formModal"><i
                    class="bi bi-person-plus me-2"></i>lapor</a>

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
                        <th scope="col">Status </th>
                        <th scope="col">Aksi </th>

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
                            <?= $lapor["id_frek"]; ?>
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
                            <td>
                                <select class="form-select form-select-sm" aria-label="Small select example">
                                    <?php foreach ($data['status'] as $status): ?>
                                        <option value="<?= $status['id_status']; ?>">
                                            <?= $status['nama_status']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td class="d-flex mt-3 justify-content-center">
                                <i class="fa-solid fa-trash-can fa-2xl" style="color: #0d58d9; margin-right: 10px;"></i>
                                <i class="fa-solid fa-pen-to-square fa-2xl" style="color: #63E6BE; margin-right: 10px;"></i>
                                <br><br>
                            </td>

                        </tr>

                    </tbody>
                <?php endforeach; ?>

            </table>
        </div>
    </div>
    <div class="col py-3 bg-white ">

    </div>
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







                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Lapor</button>
                </form>
            </div>
        </div>
    </div>
</div>


</div>


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