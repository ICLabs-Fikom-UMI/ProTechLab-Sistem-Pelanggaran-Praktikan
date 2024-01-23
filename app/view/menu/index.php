
    <div class="container  mt-2">
    <img src="<?=BASEURL; ?>/img/logoFikom.png" alt="" width="300px">
        
            <div class="mx-auto mt-5" style="width: 600px;">
                <div class="navbar ">

                    <div class="container-fluid ">
                    <button type="button" class="btn btn-dark btn-outline-light btn-lg" data-bs-toggle="modal" data-bs-target="#formModal">
                            Lapor
                            </button>
                        <a href="<?= BASEURL; ?>/menu/lihat" class="btn btn-dark btn-outline-light btn-lg " type="button">lihat</a>
                        <button class="btn btn-dark btn-outline-light btn-lg " type="button">tindak lanjut</button>
                    </div>

                </div> 
            </div>
            <!-- Modal -->
            <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="judulModal">Tambah Data Pelanggaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">

                    <form action="<?= BASEURL; ?>/menu/tambah" method="post">
                        <div class="mb-3">
                        <label for="nama" class="form-label">nama</label>
                        <input type="text" class="form-control" id="nama"  name="nama" >
                        </div>    

                        <div class="mb-3">
                        <label for="nim" class="form-label">nim</label>
                        <input type="number" class="form-control" id="nim"  name="nim" >
                        </div>   
                        
                        <div class="mb-3">
                        <label for="frekuensi" class="form-label">frekuensi</label>
                        <input type="text" class="form-control" id="frekuensi"  name="frekuensi" >
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
                        <label for="tgl_laporan" class="form-label">tgl_laporan</label>
                        <input type="date" class="form-control" id="tgl_laporan"  name="tgl_laporan" >
                        </div>  



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Lapor</button>
                </div>
                </div>
            </div>
            </div>
            
    </div>



