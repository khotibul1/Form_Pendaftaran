<?php

include("koneksi.php");

if( isset($_GET['id']) ){

    
    $kode = $_GET['id'];


    $sql = "DELETE FROM tb_daftar WHERE id=$kode";
    $query = mysqli_query($db, $sql);

    
    if( $query ){
        header('Location: tambah-pendaftaran.php?status=sukses');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>