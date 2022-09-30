
<!DOCTYPE html>
<html lang="en">
<head>
    <title>form pendaftaran</title>
</head>
<body>
    <form action="proses_pendaftaran.php" method="POST">
    <fieldset>
        <p>
            <label for="nama">nama: </label>
            <input type="text" name="nama" />
        </p>
        <p>
            <label for="tempat_lahir">tempat_lahir: </label>
            <input type="text" name="tempat_lahir" />
        </p>
        <p>
            <label for="tanggal_lahir">tanggal_lahir: </label>
            <input type="date" name="tanggal_lahir" />
        </p>
        <p>
            <label for="alamat">alamat: </label>
            <input type="textarea" name="alamat" />
        </p>
        <p>
            <label for="jenis_kelamin">jenis_kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" /> laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" /> perempuan</label>
        </p>
        <p>
            <label for="agama">agama: </label>
            <select name="agama">
                <option>islam</option>
                <option>kristen</option>
                <option>buddha</option>
                <option>katolik</option>
                <option>hindu</option>
            </select>
        </P>
        <P>
            <input type="submit" value="daftar" name="daftar" />
        </p>
    </fieldset>
</form>
</body>
</html>