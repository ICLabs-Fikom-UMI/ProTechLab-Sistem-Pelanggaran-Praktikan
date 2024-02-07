<!-- views/frekuensi/tambah.php -->
<div class="overflow-scroll" style="max-height: 85vh; overflow-x: hidden;">
    <div class="container mt-3 p-5">
        <h1>Tambah Data Frekuensi</h1>
        <br>
        <button type="button" class="btn btn-primary tombolTambahFrekuensi" data-bs-toggle="modal" data-bs-target="#formModalEdit">Tambah
            Data</button>

        <div class="col py-3  ">
            <div class="row">
                <div class="col-lg-6">
                    <?php Flasher::flash() ?>
                </div>
            </div>


        </div>


        <H1>Daftar Frekuensi </H1>

        <div class="w-75 mx-auto mt-5 shadow-lg rounded-4 p-4">
            <table id="myTable" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>Frekuensi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0;
                    foreach ($data["frekuensi"] as $frekuensi):
                        $no++; ?>
                        <tr>
                            <td>
                                <?= $no; ?>
                            </td>
                            <td>
                                <?= $frekuensi["nama_frek"]; ?>
                            </td>
                            <td>
                                <!-- Tambahkan tautan aksi di sini -->
                                <button
                                    onclick="location.href='<?= BASEURL; ?>/menu/hapusFrekuensi/<?= $frekuensi['id_frek']; ?>'; return confirm ('yakin?')"
                                    class="btn btn-danger hapusFrekuensi"> <i class="bi bi-trash-fill"></i>hapus</button>

                                <button type="button" class="btn btn-success tampilEdit" data-bs-toggle="modal"
                                    data-bs-target="#formModalEdit">
                                    <i class="bi bi-pencil-fill"></i> Edit
                                </button>

                                <!-- Anda dapat menambahkan aksi lainnya sesuai kebutuhan -->
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>no</th>

                        <th>Frekuensi</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>

    </div>
    <!-- !-- Modal -->
    <div class="modal fade" id="formModalEdit" tabindex="-1" aria-labelledby="judul modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="judulmodal">Tambah Data </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL; ?>/Menu/tambahFrekuensi" method="post">
                        <div class="mb-3">

                            <div class="mb-3">
                                <label for="frekuensi" class="form-label">Nama Frekuensi</label>
                                <input type="text" class="form-control mb-2" id="nama_frek" name="nama_frek"
                                    placeholder="Format =' jurusan_matkul-angka ' (TI_MICRO-1 / SI_WEB-1)">
                            </div>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </form>

                </div>
            </div>
        </div>
    </div>