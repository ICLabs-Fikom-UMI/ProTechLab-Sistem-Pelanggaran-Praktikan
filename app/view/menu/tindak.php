<div class="col py-3 ">

    <div class="d-flex justify-content-between align-items-center p-5">
        <h1>Daftar Tindak Lanjut</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
            Lapor
        </button>
    </div>
    <div class="col-lg-6">
        <?php Flasher::flash() ?>
    </div>

    <div class=" mx-auto mt-3 shadow-lg rounded-4 p-4">
        <table id="myTable" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>no</th>
                    <th>nim</th>
                    <th>semester</th>
                    <th>frekuensi</th>
                    <th>tempat</th>
                    <th>deskripsi</th>
                    <th>Tanggal Pelaporan</th>
                    <th>pelapor</th>
                    <th>Status</th>
                    <th>Aksi</th>
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
                            <?= $lapor["nim"]; ?>
                        </td>
                        <td>
                            <?= $lapor["semester"]; ?>
                        </td>

                        <td>
                            <?= $lapor["nama_frek"]; ?>
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
                        <td>
                            <?= $lapor["username"]; ?>
                        </td>
                        <td>
                            <!-- Tambahkan dropdown status di sini -->
                            <select class="form-select form-select-sm" aria-label="Small select example">
                                <?php foreach ($data['status'] as $status): ?>
                                    <option value="<?= $status['id_status']; ?>">
                                        <?= $status['nama_status']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                        <td>
                            <button onclick="location.href='<?= BASEURL; ?>/menu/hapusLaporan/<?= $lapor['id_laporan']; ?>'; return confirm ('yakin?')"
                                class="btn btn-danger hapusLaporan" style="margin-right: 10px;">
                                <i class="bi bi-trash-fill"></i> Hapus
                            </button>

                            <a href="<?= BASEURL; ?>/menu/ubah/<?= $frekuensi['id_frek']; ?>"
                                class="btn btn-success tampilEdit" data-bs-toggle="modal"
                                data-bs-target="#formModalEdit" data-id="<?= $frekuensi['id_frek']; ?>">
                                <i class="bi bi-pencil-fill"></i> Edit
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>

</div>