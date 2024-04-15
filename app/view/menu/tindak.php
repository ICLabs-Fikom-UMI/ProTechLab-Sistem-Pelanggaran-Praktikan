<!-- isi konten -->


<div class="overflow-scroll" style="max-height: 85vh; overflow-x: hidden;">


    <div class="col ">


        <div class=" mx-auto shadow-lg rounded-4 p-4">
            <div class="row">
                <div class="col-lg-6">
                    <?php Flasher::flash() ?>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center p-5 ">
                <h1>Daftar Tindak Lanjut</h1>
                <?php if ($_SESSION['role'] == 'asisten' || $_SESSION['role'] == 'admin') { ?>
                    <button type="button" class="btn btn-danger tombolLapor" data-bs-toggle="modal"
                        data-bs-target="#formModal">
                        Lapor
                    </button>
                <?php } ?>
            </div>
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
                        <th>Foto</th>
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
                                <?php
                                $status = $lapor['nama_status'];
                                $style = '';

                                switch ($status) {
                                    case 'Peringatan':
                                        $style = 'background-color: gray; color: white;';
                                        break;
                                    case 'Peringatan 2':
                                        $style = 'background-color: black; color: white;';
                                        break;
                                    case 'Menghadap':
                                        $style = 'background-color: red; color: white;';
                                        break;
                                    default:
                                        $style = 'background-color: white; color: white;';
                                        break;
                                }
                                ?>

                                <span
                                    style="padding: 5px 8px;  cursor: pointer; display: inline-block; text-align: center; text-decoration: none; border-radius: 5px; <?= $style; ?>">
                                    <?= $status; ?>
                                </span>
                            </td>



                            <td class="text-center"><img src="<?= BASEURL; ?>/<?= $lapor['photo_path'] ?>" alt="no foto"
                                    style="max-width: 100px; max-height: 100px;"></td>
                            <td>
                                <a href="<?= BASEURL; ?>/menu/hapusLaporan/<?= $lapor["id_laporan"]; ?>"
                                    class="badge text-danger mx-2"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus laporan ini?')">hapus</a>

                                <a href="<?= BASEURL; ?>/menu/editLaporan/<?= $lapor["id_laporan"]; ?>"
                                    class="badge text-success mx-2 tampilModalEditLaporan" data-bs-toggle="modal"
                                    data-bs-target="#formModal" data-id="<?= $lapor["id_laporan"]; ?>">edit</a>

                                <a href="<?= BASEURL; ?>/menu/detailLaporan/<?= $lapor["id_laporan"]; ?>"
                                    class="badge text-primary mx-2 tampilModalDetailLaporan" data-bs-toggle="modal"
                                    data-bs-target="#detailModal<?= $lapor['id_laporan'] ?>"
                                    data-id="<?= $lapor["id_laporan"]; ?>">detail</a>

                            </td>
                        </tr>
                        <!-- Modal Detail -->
                        <div class="modal fade" id="detailModal<?= $lapor['id_laporan'] ?>" tabindex="-1"
                            aria-labelledby="detailModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title font-weight-bold" id="detailModalLabel">Detail Laporan</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="font-weight-normal">NIM:
                                                        <?= $lapor['nim'] ?>
                                                    </p>
                                                    <p class="font-weight-normal">Semester:
                                                        <?= $lapor['semester'] ?>
                                                    </p>
                                                    <p class="font-weight-normal">Frekuensi:
                                                        <?= $lapor['nama_frek'] ?>
                                                    </p>
                                                    <p class="font-weight-normal">Tempat:
                                                        <?= $lapor['tempat'] ?>
                                                    </p>
                                                    <p class="font-weight-normal">Deskripsi:
                                                        <?= $lapor['deskripsi'] ?>
                                                    </p>
                                                    <p class="font-weight-normal">Tanggal Pelaporan:
                                                        <?= $lapor['tgl_laporan'] ?>
                                                    </p>
                                                    <p class="font-weight-normal">Pelapor:
                                                        <?= $lapor['username'] ?>
                                                    </p>
                                                    <p class="font-weight-normal">Status:
                                                        <?= $lapor['nama_status'] ?>
                                                    </p>
                                                </div>
                                                <div class="col-md-6 text-center">
                                                    <img src="<?= BASEURL; ?>/<?= $lapor['photo_path'] ?>" alt="Foto"
                                                        style="max-width: 100%; max-height: 100%;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        <?php endforeach; ?>
        </tbody>

        </table>

    </div>

</div>