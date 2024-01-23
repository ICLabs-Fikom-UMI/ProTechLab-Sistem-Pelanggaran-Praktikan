<div class="container mt-5 ">
    
    <div class="row">
        <div class="col-6">
            <h3>Daftar Laporan</h3>

                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">nama</th>
                        <th scope="col">nim</th>
                        <th scope="col">frekuensi</th>
                        <th scope="col">lab</th>
                        <th scope="col">deskripsi</th>
                        <th scope="col">Tanggal Pelaporan</th>
                        
                        </tr>
                    </thead>
                    <?php foreach( $data["lapor"] as $lapor) : ?>
                    <tbody>
                    
                        <tr>
                        <th scope="row"><?= $lapor["id"]; ?></th>
                        <td><?= $lapor["nama"]; ?></td>
                        <td> <?= $lapor["nim"]; ?></td>
                        <td><?= $lapor["frekuensi"]; ?></td>
                        <td><?= $lapor["lab"]; ?></td>
                        <td><?= $lapor["deskripsi"]; ?></td>
                        <td><?= $lapor["tgl_pelaporan"]; ?></td>
                        </tr>

                    </tbody>
                    <?php endforeach; ?>

                </table>
                

        </div>
    </div>

</div>

