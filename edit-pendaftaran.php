<?php

include("koneksi.php");


if( !isset($_GET['id']) ){
    header('Location: proses-edit-pendaftaran.php');
}


$id = $_GET['id'];


$sql = "SELECT * FROM tb_daftar WHERE id=$kode";
$query = mysqli_query($db, $sql);
$tb_daftar = mysqli_fetch_assoc($query);


if(mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>
<!DOCTYPE html>
<html lang="en">
   <head>
    <title>EDIT DATA PENDAFTAR</title>
   </head>
   <body>
       <h1>From Edit Pendaftaran</h1>
       <from action="proses-edit-pendaftaran.php" method="POST">
       <from>
           <fieldset>
            <input type="hidden" name="id" value="<?php echo $tb_daftar['id']?>"/>
               <p>
                   <label for="nama">Nama Lengkap :</label>
                   <input type="text" value="<?php echo $tb_daftar['nama']?>"/>
                </p>
                <p>
                   <label for="tempat_lahir">Tempat Lahir :</label>
                   <input type="text" value="<?php echo $tb_daftar['tempat_lahir']?>"/>
                </p>
                <p>
                   <label for="tanggal_lahir">Tanggal Lahir :</label>
                   <input type="date" value="<?php echo $tb_daftar['tanggal_lahir']?>"/>
                </p>
                <p>
                   <label for="alamat">Alamat :</label>
                   <textarea name="alamat" rows="5" value="<?php echo $tb_daftar['alamat'] ?>" ></textarea>
                </p>
                <p>
                   <label for="jenis_kelamin">Jenis Kelamin :</label>
                   <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ('laki-laki') ? "checked": ""?> />Laki-laki</label>
                   <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ('perempuan') ? "cheked": ""?> />Perempuan</label>
                </p>
                <p>
                   <label for="agama">Agama :</label>
                   <option <?php echo ('Islam') ? "selected": "" ?>>Islam</option>
                   <option <?php echo ('Kristen') ? "selected": "" ?>>Kristen</option>
                   <option <?php echo ('Katolik') ? "selected": "" ?>>Katolik</option>
                   <option <?php echo ('Hindu') ? "selected": "" ?>>Hindu</option>
                   <option <?php echo ('Budha') ? "selected": "" ?>>Budha</option>
                </p>
                </p>
                </p>
               <p>
                   <input type="submit" value="Daftar" name="simpan" />
               </P>
           </fieldset>
       </from>
   </body>
</html>  