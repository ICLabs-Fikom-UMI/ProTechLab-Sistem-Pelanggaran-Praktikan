<div class="col py-3 bg-light ">

    <h1>Daftar Tindak Lanjut</h1>

<br>
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
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 0;
        foreach ($data["lapor"] as $lapor):
            $no++; ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $lapor["nama"]; ?></td>
                <td><?= $lapor["nim"]; ?></td>
                <td><?= $lapor["frekuensi"]; ?></td>
                <td><?= $lapor["tempat"]; ?></td>
                <td><?= $lapor["deskripsi"]; ?></td>
                <td><?= $lapor["tgl_laporan"]; ?></td>
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
                    <!-- Tambahkan tautan aksi di sini -->
                    <a href="<?= BASEURL; ?>/menu/hapus/<?= $lapor["nomor"]; ?>" class="badge text-danger mx-2">hapus</a>
                    <a href="<?= BASEURL; ?>/menu/edit/<?= $lapor["nomor"]; ?>" class="badge text-success mx-2">edit</a>
                    <!-- Anda dapat menambahkan aksi lainnya sesuai kebutuhan -->
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
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </tfoot>
</table>

</div>



                        </div>   -->