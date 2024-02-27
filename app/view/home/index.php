<!-- Content Section -->
<div class="container mt-1">
  <div class="row">
    <div class="col-md-8">

      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
      <lottie-player src="https://lottie.host/a2caaada-f09d-42aa-a546-de08e92f9aa7/9rb8RzhnvY.json" background="##fff"
        speed="1" style="width: 480px; height: 480px" loop autoplay direction="1" mode="normal">
      </lottie-player>

      <h2>Selamat Datang di ProTechLab</h2>
      <p>
        ProTechLab adalah platform yang didedikasikan untuk pelaporan pelanggaran dan pengamatan di laboratorium teknis
        profesional. Kami berkomitmen untuk memastikan keamanan dan integritas dalam setiap aktivitas laboratorium.
      </p>
      <p>
        Dengan menggunakan ProTechLab, Anda dapat dengan mudah melaporkan pelanggaran, mengikuti status laporan, dan
        berkontribusi pada menciptakan lingkungan laboratorium yang aman dan efisien.
      </p>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Statistik Pelaporan Pelanggaran</h5>
          <p class="card-text">Total Pelanggaran:
            <span id="totalPelanggaran">
              <?= $data['total']["total"]; ?>
            </span>
          </p>


          <a href="<?= BASEURL; ?>/tatib/detail" class="btn btn-primary">Lihat Detail</a>
        </div>
      </div>
    </div>
    <div>

    </div>

  </div>
</div>