<!-- views/Akun/tambah.php -->
<div class="overflow-scroll" style="max-height: 85vh; overflow-x: hidden;">
    <div class="w-75 mx-auto shadow-lg rounded-4 p-4">
        <div class="col-lg-6">
            <?php Flasher::flash() ?>
        </div>
        <div class="d-flex justify-content-between align-items-center p-5">
            <h1>Daftar Akun</h1>
            <button type="button" class="btn btn-primary tombolTambahAkun" data-bs-toggle="modal"
                data-bs-target="#formModalTambahAkun">Tambah Akun</button>
        </div>
        <table id="myTable" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>NIM</th>
                    <th>Role</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 0;
                foreach ($data["akun"] as $akun):
                    $no++; ?>
                    <tr>
                        <td>
                            <?= $no; ?>
                        </td>
                        <td>
                            <?= $akun["username"]; ?>
                        </td>
                        <td>
                            <?= $akun["nim"]; ?>
                        </td>
                        <td>
                            <?= $akun["role"]; ?>
                        </td>
                        <td>
                            <?= $akun["password"]; ?>
                        </td>
                        <td>
                            <a href="<?= BASEURL; ?>/menu/hapusAkun/<?= $akun["id_user"]; ?>" class="badge text-danger mx-2"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus akun ini?')">hapus</a>

                            <a href="<?= BASEURL; ?>/menu/editAkun<?= $akun["id_user"]; ?>"
                                class="badge text-success mx-2 tampilModalEditAkun" data-bs-toggle="modal"
                                data-bs-target="#formModalTambahAkun" data-id="<?= $akun["id_user"]; ?>">edit</a>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModalTambahAkun" tabindex="-1" aria-labelledby="judul modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulmodalAkun">Tambah Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= BASEURL; ?>/menu/tambahAkun" class="mx-1 mx-md-4">
                <input type="hidden" name="id_user" id="id_user" value="">
                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <input type="text" id="username" name="username" class="form-control" required />
                            <label class="form-label" for="form3Example1c">Username</label>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <input type="text" id="nim" name="nim" class="form-control" required />
                            <label class="form-label" for="form3Example3c">NIM</label>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <select class="form-select" id="role" name="role">
                                <option value="asisten">asisten
                                </option>
                                <option value="admin">admin
                                </option>
                            </select>
                            <label class="form-label" for="form3Example4c">role</label>

                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <select class="form-select" id="password" name="password">
                                <option value="asisten123">asisten123
                                </option>
                                <option value="admin123">admin123
                                </option>
                            </select>
                            <label class="form-label" for="form3Example4c">password</label>

                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>