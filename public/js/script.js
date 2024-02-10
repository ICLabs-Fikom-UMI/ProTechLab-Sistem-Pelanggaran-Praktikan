$(function () {

    $(".tombolTambahFrekuensi").on("click", function () {
        $("#judulmodal").html("Tambah Frekuensi");
        $(".modal-body button[type=submit]").html("Tambah Data");
    });

    $(".tampilEdit").on("click", function () {
        $("#judulmodal").html("Ubah Frekuensi");
        $(".modal-body button[type=submit]").html("Ubah Data");
        $(".modal-body form").attr("action", 'http://localhost/ProTechLab-Sistem-Pelanggaran-Praktikan/public/menu/ubah');

        const id = $(this).data("id");  
        // console.log(id);

        $.ajax({
            url: 'http://localhost/ProTechLab-Sistem-Pelanggaran-Praktikan/public/menu/getUbah',
            data: { id : id },
            method: "post",
            dataType: "json",
            success: function (data) {
                console.log(data);
                $("#nama_frek").val(data.nama_frek);
                $("#id").val(data.id_frek);
            }
        });

    });

    $(".tombolLapor").on("click", function (){
        $("#judulmodalLapor").html("Tambah Laporan");
        $(".modal-footer button[type=submit]").html("Lapor");
        $(".modal-footer button[type=submit]").removeClass("btn-danger").addClass("btn-danger");
    });


    $(".tampilModalEditLaporan").on("click", function (){
        $("#judulmodalLapor").html("Edit Laporan");
        $(".modal-footer button[type=submit]").html("Edit Data");
        $(".modal-footer button[type=submit]").removeClass("btn-danger").addClass("btn-primary");
        $(".modal-body form").attr("action", 'http://localhost/ProTechLab-Sistem-Pelanggaran-Praktikan/public/menu/editLaporan');

        const id = $(this).data("id");  
        // console.log(id);

        $.ajax({
            url: 'http://localhost/ProTechLab-Sistem-Pelanggaran-Praktikan/public/menu/laporUbah',
            data: { id : id },
            method: "post",
            dataType: "json",
            success: function (data) {
                console.log(data);
                $("#id_user").val(data.id_user);
                $("#semester").val(data.semester);
                $("#id_frek").val(data.id_frek);
                $("#nim").val(data.nim);
                $("#tempat").val(data.tempat);
                $("#deskripsi").val(data.deskripsi);
                $("#tgl_laporan").val(data.tgl_laporan);
                $("#id_laporan").val(data.id_laporan);
                
            }
        });
    });

    
});
