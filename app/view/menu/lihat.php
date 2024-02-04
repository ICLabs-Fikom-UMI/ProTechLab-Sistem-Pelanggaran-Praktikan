<!-- isi konten -->

<div class="overflow-scroll" style="max-height: 85vh; overflow-x: hidden;">


    <div class="col py-3 bg-light ">
        <div class="row">
            <div class="col-lg-6">
                <?php Flasher::flash() ?>

            </div>
        </div>
        <h1>Tampilan lihat</h1>

        <br><br>

        <table id="myTable" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>no</th>
                    <th>nama</th>
                    <th>nim</th>
                    <th>frekuensi</th>
                    <th>tempat</th>
                    <th>deskripsi</th>
                    <th>Tanggal Pelaporan</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 0;
                foreach ($data["lapor"] as $lapor):
                    $no++; ?>
                    <tr>
                        <td>
                            <?= $no; ?>
                        </td>
                        <td>
                            <?= $lapor["nama"]; ?>
                        </td>
                        <td>
                            <?= $lapor["nim"]; ?>
                        </td>
                        <td>
                            <?= $lapor["frekuensi"]; ?>
                        </td>
                        <td>
                            <?= $lapor["tempat"]; ?>
                        </td>
                        <td>
                            <?= $lapor["deskripsi"]; ?>
                        </td>
                        <td>
                            <?= $lapor["tgl_laporan"]; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>no</th>
                    <th>nama</th>
                    <th>nim</th>
                    <th>frekuensi</th>
                    <th>tempat</th>
                    <th>deskripsi</th>
                    <th>Tanggal Pelaporan</th>
                </tr>
            </tfoot>
        </table>



        <!-- card -->
        <div class="container mt-5">
            <div class="row">
                <?php foreach ($data["lapor"] as $lapor): ?>
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?= $lapor["nama"]; ?>
                                </h5>
                                <h6 class="card-subtitle mb-2 text-muted">
                                    <?= $lapor["nim"]; ?>
                                </h6>
                                <p class="card-text">
                                    <strong>Frekuensi:</strong>
                                    <?= $lapor["frekuensi"]; ?><br>
                                    <strong>Tempat:</strong>
                                    <?= $lapor["tempat"]; ?><br>
                                    <strong>Deskripsi:</strong>
                                    <?= $lapor["deskripsi"]; ?><br>
                                    <strong>Tanggal Pelaporan:</strong>
                                    <?= $lapor["tanggal"]; ?><br>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
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