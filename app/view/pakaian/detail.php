<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <!-- Image Section -->
            <?php if ($data["pakaian"]["nama"] == "Laki-Laki"): ?>
                <img src="<?= BASEURL; ?>/img/pakaian/cowok.png" alt="" width="100%" style="max-width: 350px;">
            <?php else: ?>
                <img src="<?= BASEURL; ?>/img/pakaian/cewek.png" alt="" width="100%" style="max-width: 350px;">
            <?php endif; ?>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6 text-center">
            <a href="<?= BASEURL; ?>/tatib" class="card-link">kembali</a>
            <!-- Informasi atau konten tambahan dapat diletakkan di sini -->
        </div>
    </div>
</div>
