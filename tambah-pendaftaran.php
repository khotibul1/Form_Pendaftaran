<?php
include("koneksi.php");
?>
<html>
<head>
</head>
<body>
<h1>Data Pendaftaran</h1>
<h4> <a href=pendaftaran.php>Tambah Siswa</a></h4>
<table border=1>
    <tr>
         <th>No</th>
         <th>Nama</th>
         <th>Tempat Lahir</th>
         <th>Tanggal Lahir</th>
         <th>Alamat</th>
         <th>Jenis Kelamin</th>
         <th>Agama</th>  
         <th>Aksi</th>
     </tr>


    <?php
      include ("koneksi.php");
      $sql="SELECT * FROM tb_daftar";
      $query = mysqli_query($db, $sql);

      while($tb_daftar = mysqli_fetch_array($query)){
        echo "<tr>";		
        echo "<td>".$tb_daftar['id']."</td>";  
        echo "<td>".$tb_daftar['nama']."</td>";
        echo "<td>".$tb_daftar['tempat_lahir']."</td>";
        echo "<td>".$tb_daftar['tanggal_lahir']."</td>";  
        echo "<td>".$tb_daftar['alamat']."</td>";
        echo "<td>".$tb_daftar['jenis_kelamin']."</td>";
        echo "<td>".$tb_daftar['agama']."</td>";
        echo "<td>";
        echo "<a href='edit-pendaftaran.php?id=".$tb_daftar['id']."'>Edit</a> | ";
        echo "<a href='hapus-pendaftaran.php?id=".$tb_daftar['id']."'>Hapus</a> | ";
        echo "</td>";
        echo "</tr>";

      }
    ?>
    </table>
    </body>
    </html>