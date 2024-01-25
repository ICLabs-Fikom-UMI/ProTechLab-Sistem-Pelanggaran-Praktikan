
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark text-light opacity-75">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">  

            <!-- menu -->
            <nav class="navbar">
                <form class="container-fluid d-flex flex-column justify-content-start">
                    <a class="btn btn-outline-success me-2" data-bs-toggle="modal" data-bs-target="#formModal"><i class="bi bi-person-plus me-2"></i>lapor</a>
                    <br><br><br>
                    <a href="<?= BASEURL; ?>/menu/lihat" class="btn btn-outline-success me-2"><i class="bi bi-eye me-2"></i>lihat</a>
                    <br><br><br>
                    <button class="btn btn-outline-success me-2" type="button"><i class="bi bi-search me-2"></i>Tindak</button>
                </form>
            </nav>

            </div>
        </div>


        <!-- isi konten -->
        <div class="col py-3 bg-white opacity-75">
               
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


                        <div class="mb-3">
                        <label for="nama" class="form-label">nama</label>
                        <input type="text" class="form-control" id="nama"  name="nama" >
                        </div>    



                        <div class="mb-3">
                        <label for="nim" class="form-label">nim</label>
                        <input type="text" class="form-control" id="nim"  name="nim" >
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
                        <label for="tanggal" class="form-label">tanggal</label>
                        <input type="date" class="form-control" id="tanggal"  name="tanggal" >
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



 
     
           

          
           




