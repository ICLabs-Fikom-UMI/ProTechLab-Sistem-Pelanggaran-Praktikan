<?php if ($_SESSION['role'] == 'asisten' || $_SESSION['role'] == 'admin' || $_SESSION['role'] == 'praktikan') { ?>
<div class="container-fluid">
    <img src="<?=BASEURL; ?>/img/logoFikom.png" alt="" width="300px">

    <div class="flex d-flex justify-content-center mt-5">
        <img src="<?=BASEURL; ?>/img/brand.png" alt="" width="1000px">
    </div>

    
    
</div>
<?php  
} else {
    // Jika role tidak sesuai, redirect ke halaman login
    header("Location: " . BASEURL . "/login"); // Sesuaikan dengan path login yang sesuai di aplikasi Anda
    exit();
}?>