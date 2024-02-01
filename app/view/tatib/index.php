<?php if ($_SESSION['role'] == 'asisten' || $_SESSION['role'] == 'admin' || $_SESSION['role'] == 'praktikan') { ?>
<div class="container-fluid">
    <img src="<?=BASEURL; ?>/img/logoFikom.png" alt="" width="300px">

    <div class="flex d-flex justify-content-center mt-5">
        <img src="<?=BASEURL; ?>/img/tatib/tatib.png" alt="" width="400px">
        <img src="<?=BASEURL; ?>/img/tatib/tatib2.png" alt="" width="500px">
    </div>

  

</div>
<?php } else {
    // Jika role tidak sesuai, redirect ke halaman login
    header("Location: " . BASEURL . "/login"); // Sesuaikan dengan path login yang sesuai di aplikasi Anda
    exit();
}?>