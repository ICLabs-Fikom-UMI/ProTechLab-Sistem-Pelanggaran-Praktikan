<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- DataTables -->
<script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>

<!-- DataTables Buttons -->
<script src="https://cdn.datatables.net/buttons/3.0.0/js/dataTables.buttons.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.bootstrap5.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.colVis.min.js"></script>

<!-- Your Custom Script -->
<script src="<?= BASEURL; ?>/js/script.js"></script>


<script>
    $(document).ready(function () {
        
        $('#myTable').DataTable({
            layout: {
                topStart: {
                    buttons: [ 'copy', 'excel', 'pdf', 'colvis']
                }
            }
        });
    });

</script>




</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judul modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulmodalLapor">Tambah Data </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/menu/tambahLaporanLihat/" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_laporan" id="id_laporan">
                    <div class="mb-3">


                        <!--  coba -->
                        <input type="hidden" value="<?= $_SESSION["id_user"]; ?>" name="id_user" id="id_user">
                        <div class="mb-3">
                            <label for="input pelapor" class="form-label">Pelapor</label>
                            <input type="text" class="form-control" id="pelapor" name="pelapor"
                                value="<?= $_SESSION["username"]; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="semester" class="form-label">Semester</label>
                            <select class="form-select" id="semester" name="semester">
                                <option value="Genap">Genap
                                </option>
                                <option value="Ganjil">Ganjil
                                </option>
                            </select>
                        </div>


                        <div class="mb-3">
                            <label for="frekuensi" class="form-label">Frekuensi</label>
                            <select class="form-select form-select-sm selectpicker" id="id_frek" name="id_frek"
                                aria-label="Small select example">
                                <?php foreach ($data['frekuensi'] as $frekuensi): ?>
                                    <option value="<?= $frekuensi['id_frek']; ?>">
                                        <?= $frekuensi['nama_frek']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>


                        <div class="mb-3">
                            <label for="input nim" class="form-label">nim</label>
                            <input type="text" class="form-control" id="nim" name="nim" required minlength="11"
                                maxlength="11" size="11">
                        </div>


                        <div class="mb-3">
                            <label for="tempat" class="form-label">Tempat</label>
                            <select class="form-select" id="tempat" name="tempat">
                                <?php
                                $enumValues = array('Iot', 'Start-Up', 'Comnet', 'Multimedia', 'Computer Vision', 'Data Science', 'Micro', 'Working Space lt 2', 'Working Space lt 1', 'Pelataran Fikom');

                                foreach ($enumValues as $value) {
                                    echo "<option value=\"$value\">$value</option>";
                                }
                                ?>
                            </select>
                        </div>


                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">deskripsi</label>
                            <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="tanggal" class="form-label">tanggal</label>
                            <input type="date" class="form-control" id="tgl_laporan" name="tgl_laporan">
                        </div>
                        <div class="mb-3">
                            <label for="photo_path" class="form-label">Foto</label>
                            <input type="file" class="form-control" id="photo_path" name="photo_path">
                        </div>
                        <div class="form-group mb-1">
                            <label for="id_status" class="form-label">Status</label>
                            <select name="id_status" class="form-select ">
                                <option>Pilih Status</option>
                                <?php
                                foreach ($data['statusOptions'] as $status) {
                                    echo "<option value='{$status['id_status']}'>{$status['nama_status']}</option>";
                                }
                                ?>
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


</body>

</html>