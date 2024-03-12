$(function () {
  $(".tombolTambahFrekuensi").on("click", function () {
    $("#judulmodal").html("Tambah Frekuensi");
    $(".modal-body button[type=submit]").html("Tambah Data");

    const data = "";
    $("#nama_frek").val(data.nama_frek);
    $("#id").val(data.id_frek);
  });

  $(".tampilEdit").on("click", function () {
    $("#judulmodal").html("Ubah Frekuensi");
    $(".modal-body button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr(
      "action",
      "http://localhost/ProTechLab-Sistem-Pelanggaran-Praktikan/public/menu/ubah"
    );

    const id = $(this).data("id");
    // console.log(id);

    $.ajax({
      url: "http://localhost/ProTechLab-Sistem-Pelanggaran-Praktikan/public/menu/getUbah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        console.log(data);
        $("#nama_frek").val(data.nama_frek);
        $("#id").val(data.id_frek);
      },
    });
  });

  $(".tombolLapor").on("click", function () {
    $("#judulmodalLapor").html("Tambah Laporan");
    $(".modal-footer button[type=submit]").html("Lapor");
    $(".modal-footer button[type=submit]")
      .removeClass("btn-danger")
      .addClass("btn-danger");

    const data = "";
    $("#semester").val(data.semester);
    $("#id_frek").val(data.id_frek);
    $("#nim").val(data.nim);
    $("#tempat").val(data.tempat);
    $("#deskripsi").val(data.deskripsi);
    $("#tgl_laporan").val(data.tgl_laporan);
    $("#id_status").val(data.id_status);
    $("#photo_path").val(data.photo_path);
    $("#id_laporan").val(data.id_laporan);
  });

  $(".tampilModalEditLaporan").on("click", function () {
    $("#judulmodalLapor").html("Edit Laporan");
    $(".modal-footer button[type=submit]").html("Edit Data");
    $(".modal-footer button[type=submit]")
      .removeClass("btn-danger")
      .addClass("btn-primary");
    $(".modal-body form").attr(
      "action",
      "http://localhost/ProTechLab-Sistem-Pelanggaran-Praktikan/public/menu/editLaporan"
    );

    const id = $(this).data("id");
    // console.log(id);

    $.ajax({
      url: "http://localhost/ProTechLab-Sistem-Pelanggaran-Praktikan/public/menu/laporUbah",
      data: { id: id },
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
        $("#id_status").val(data.id_status);
        $("#photo_path").attr("src", data.photo_path);
        $("#id_laporan").val(data.id_laporan);
      },
    });
  });

  $(".tombolTambahAkun").on("click", function () {
    $("#judulmodalAkun").html("Tambah Akun");
    $(".modal-body button[type=submit]").html("Tambah Data Akun");

    const data = "";
    $("#username").val(data.username);
    $("#nim").val(data.nim);
    $("#role").val(data.role);
    $("#password").val(data.password);
    $("#id_user").val(data.id_user);
  });

  $(".tampilModalEditAkun").on("click", function () {
    $("#judulmodalAkun").html("Ubah Akun");
    $(".modal-body button[type=submit]").html("Ubah Data Akun");
    $(".modal-body form").attr(
      "action",
      "http://localhost/ProTechLab-Sistem-Pelanggaran-Praktikan/public/menu/AkunUbah"
    );

    const id = $(this).data("id");
    // console.log(id);

    $.ajax({
      url: "http://localhost/ProTechLab-Sistem-Pelanggaran-Praktikan/public/menu/getUbahAkun",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        console.log(data);
        $("#username").val(data.username);
        $("#nim").val(data.nim);
        $("#role").val(data.role);
        $("#password").val(data.password);
        $("#id_user").val(data.id_user);
      },
    });
  });

 
 
  
});


