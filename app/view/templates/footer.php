<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

<!-- DataTables -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>



<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Your Custom Script -->
<script src="<?= BASEURL; ?>/js/script.js"></script>

<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
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
                <h1 class="modal-title fs-5" id="judul modal">Tambah Data </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL; ?>/menu/tambahLaporanLihat/" method="post">
                    <div class="mb-3">


                        <!--  coba -->
                        <input type="hidden"  value="<?= $_SESSION["id_user"]; ?>" name="id_user" id="id_user">
                        <div class="mb-3">
                            <label for="input pelapor" class="form-label">Pelapor</label>
                            <input type="text" class="form-control" id="pelapor" name="pelapor"
                                value="<?= $_SESSION["username"]; ?>">
                        </div>


                        <div class="mb-3">
                            <label for="semester" class="form-label">Semester</label>
                            <select class="form-select" id="semester" name="semester">
                                <option value="genap">Genap</option>
                                <option value="ganjil">Ganjil</option>
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
                            <input type="text" class="form-control" id="nim" name="nim">
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