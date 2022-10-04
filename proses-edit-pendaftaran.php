<?php
include("koneksi.php");

if(isset($_POST['simpan'])){;
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];

$sql = "UPDATE barang SET nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama' WHERE id=$kode";
$query= mysqli_query($db,$sql);

if($query){
    header('Location: pendaftaran.php');
}else{
    die ("gagal mengedit");
}}
else{
    die("akses dilarang");
}
?>