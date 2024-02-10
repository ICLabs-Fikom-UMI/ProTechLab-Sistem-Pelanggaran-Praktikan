<!-- isi konten -->

<div class="overflow-scroll " style="max-height: 85vh; overflow-x: hidden;">


    <div class="col py-3">
        <div class="row">
            <div class="col-lg-6">
                <?php Flasher::flash() ?>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center p-5 ">
            <h1>Tampilan lihat</h1>
            <?php if ($_SESSION['role'] == 'asisten' || $_SESSION['role'] == 'admin') { ?>
                    <button type="button" class="btn btn-danger tombolLapor" data-bs-toggle="modal"
                        data-bs-target="#formModal">
                        Lapor
                    </button>
                <?php } ?>
        </div>
        



        <div class=" mx-auto mt-2 shadow-lg rounded-4 p-4">
                
            <table id="myTable" class="table table-striped" style="width:100%">
                
                <thead>
                <tr>
                    <th>no</th>
                    <th>nim</th>
                    <th>frekuensi</th>
                    <th>tempat</th>
                    <th>deskripsi</th>
                    <th>Tanggal Pelaporan</th>
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
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>