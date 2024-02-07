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

});
