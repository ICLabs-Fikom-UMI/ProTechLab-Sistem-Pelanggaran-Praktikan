<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<!-- DataTables -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
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

                <form action="<?= BASEURL; ?>/menu/lapor/" method="post">
                    <div class="mb-3">

                        <!--  coba -->

                        <div class="mb-3">
                            <label for="input nama" class="form-label">nama</label>
                            <input type="text" class="form-control" id="nama">
                        </div>

                        <div class="mb-3">
                            <label for="input nim" class="form-label">nim</label>
                            <input type="text" class="form-control" id="nim">
                        </div>

                        <div class="mb-3">
                            <label for="input frekuensi" class="form-label">frekuensi</label>
                            <input type="text" class="form-control" id="frekuensi">
                        </div>

                        <div class="mb-3">
                            <label for="input tempat" class="form-label">tempat</label>
                            <input type="text" class="form-control" id="tempat">
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">deskripsi</label>
                            <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="tanggal" class="form-label">tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal">
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Default file input example</label>
                            <input class="form-control" type="file" id="formFile">
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
