<div class="overflow-scroll" style="max-height: 85vh; overflow-x: hidden;">
    <div class="container mt-5">
        <div class="row">
            <!-- Card Section -->
            <div class="col-md-6 mb-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= $data["pakaian"]["nama"]; ?>
                        </h5>
                        <p class="card-text">
                            <?= $data["pakaian"]["deskripsi"]; ?>
                        </p>
                        <a href="<?= BASEURL; ?>/tatib" class="card-link">kembali</a>
                    </div>
                </div>
            </div>

            <!-- Image Section -->
            <?php if ($data["pakaian"]["nama"] == "Laki-Laki"): ?>
                <div class="col-md-6">
                    <img src="<?= BASEURL; ?>/img/pakaian/cowok.png" alt="" width="400px">
                </div>
            <?php else: ?>
                <div class="col-md-6">
                    <img src="<?= BASEURL; ?>/img/pakaian/cewek.png" alt="" width="400px">
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>