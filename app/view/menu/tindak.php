
<div class="overflow-scroll" style="max-height: 85vh; overflow-x: hidden;">


    <div class="col py-3">
        <div class="row">
            <div class="col-lg-6">
                <?php Flasher::flash() ?>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center p-5 ">
            <h1>Daftar Tindak Lanjut</h1>
            <?php if ($_SESSION['role'] == 'asisten' || $_SESSION['role'] == 'admin') { ?>
                <button type="button" class="btn btn-danger tombolLapor" data-bs-toggle="modal" data-bs-target="#formModal">
                    Lapor
                </button>
            <?php } ?>
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
                        <th>foto</th>
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
                                <select class="form-select form-select-sm" aria-label="Small select example" name="nama_status">
                                    <?php foreach ($data['status'] as $status): ?>
                                        <option value="<?= $status['id_status']; ?>">
                                            <?= $status['nama_status']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td>
                                <img src="<?= BASEURL; ?>/<?= $lapor['photo_path']?>" alt="Follow" style="max-height: 100px;">
                            </td>
                            <td>
                                <!-- Tambahkan tautan aksi di sini -->
                                <a href="<?= BASEURL; ?>/menu/hapusLaporan/<?= $lapor["id_laporan"]; ?>"
                                    class="badge text-danger mx-2"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus laporan ini?')">hapus</a>

                                <a href="<?= BASEURL; ?>/menu/editLaporan/<?= $lapor["id_laporan"]; ?>"
                                    class="badge text-success mx-2 tampilModalEditLaporan" data-bs-toggle="modal"
                                    data-bs-target="#formModal" data-id="<?= $lapor["id_laporan"]; ?>">edit</a>
                                <!-- Anda dapat menambahkan aksi lainnya sesuai kebutuhan -->
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>

    </div>
</div>

