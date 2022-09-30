<?php
include("koneksi.php");
if(isset($_POST['daftar'])){
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];

    $sql = "INSERT INTO tb_daftar (nama, tempat_lahir, tanggal_lahir, alamat, jenis_kelamin, agama) VALUES ('$nama', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$jenis_kelamin', '$agama')";
    $query = mysqli_query($db, $sql);

    if($query) {
        header('location: form_pendaftaran.php?status=sukses');
    }
}
?>