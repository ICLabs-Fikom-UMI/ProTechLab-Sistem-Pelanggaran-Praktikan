<?php if ($_SESSION['role'] == 'asisten' || $_SESSION['role'] == 'admin' || $_SESSION['role'] == 'praktikan') { ?>
<div class="container-fluid">
    <img src="<?=BASEURL; ?>/img/logoFikom.png" alt="" width="300px">

    <div class="flex d-flex justify-content-around mt-5">
        <img src="<?=BASEURL; ?>/img/tatib/tatib.png" alt="" width="400px">
        <img src="<?=BASEURL; ?>/img/tatib/tatib2.png" alt="" width="400px">
    </div>

  

</div>
<?php } else {
    
    header("Location: " . BASEURL . "/login"); 
    exit();
}?>