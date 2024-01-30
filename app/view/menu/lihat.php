<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark text-light opacity-75">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">

                <!-- menu -->
                <nav class="navbar mt-5">
                    <form class="container-fluid d-flex flex-column justify-content-start">
                        <a href="<?= BASEURL; ?>/menu/tindak/" class="btn btn-outline-light me-2" type="button">
                            <i class="bi bi-search me-2"></i>Tindak</button>
                        </a>
                        <br><br><br>

                        <a href="<?= BASEURL; ?>/menu/lihat/" class="btn btn-outline-light me-2"><i
                                class="bi bi-eye me-2"></i>lihat</a>
                        <br><br><br>

                    </form>
                </nav>

            </div>
        </div>


        <!-- isi konten -->
        <div class="col py-3 bg-light ">
            <h1>Tampilan lihat</h1>
            <br><br>

            <div class="row mb-3">
                <div class="col-lg-6">
                    <form action="<?= BASEURL; ?>/menu/cari" method="post">


                        <div class="input-group ">
                            <input type="text" class="form-control" placeholder="cari mahasiswa.." name="keyword"
                                id="keyword" autocomplete="off">
                            <button class="btn btn-outline-secondary" type="submit" id="tombolCari">Cari</button>
                        </div>

                        <br><br>

                        <a href="<?= BASEURL; ?>/menu/lihat/" class="btn btn-outline-dark me-5">
                            <i class="fa-solid fa-backward"></i>kembali
                        </a>





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
    </div>
    <div class="col py-3 bg-white ">

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