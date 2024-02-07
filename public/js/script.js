$(function(){

    
    $(".tombolTambahFrekuensi").on("click", function(){
        
        $("#judulmodal").html("Tambah Frekuensi");
        $(".modal-body button[type=submit]").html("Tambah Data");

    });
    $(".tampilEdit").on("click", function(){
        
        $("#judulmodal").html("Ubah Frekuensi");
        $(".modal-body button[type=submit]").html("Ubah Data");

    });

});
