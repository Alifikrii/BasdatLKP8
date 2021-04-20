<?php
    include("config.php"); 
    // include("prosesedit.php"); 
    if (isset($_GET)) {
        $id  = $_GET['id'];
    }
	$query = pg_query("SELECT * FROM calonsiswa WHERE id = $id");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data SISWA</title>
</head>
<body>
    <h1>EDIT DATA SISWA</h1>
	<?php while ($siswa = pg_fetch_array($query)) { ?>
    <form action="prosesedit.php" method="POST">
		<ul>
            <input type="hidden" name="id" value= "<?= $siswa['id'] ?>">
			<li>
				<label for="nama">NAMA : </label>
				<input type="nama" name="nama" id="nama" required value="<?= $siswa['nama'] ?>" />
			</li>
			<li>
				<label for="alamat">Alamat :</label>
				<textarea name="alamat" id="alamat" required value="<?= $siswa['alamat']?>"> <?= $siswa['alamat']?></textarea>
			</li>
			<li>
                <label for="jenis_kelamin">Jenis Kelamin: </label>
                <label><input type="radio" name="jenis_kelamin" value="laki-laki" 
                <?php if($siswa['jenis_kelamin'] == "laki-laki") echo "checked";?>> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan" 
				<?php if($siswa['jenis_kelamin'] == "perempuan") echo "checked";?>> Perempuan </label>
			</li>
			<li>
				<label for="sekolah_asal">SekolahAsal :</label>
				<input type="sekolah_asal" name="sekolah_asal" id="sekolah_asal" required value="<?= $siswa['sekolah_asal'] ?>"/>
			</li>
			<li>
				
			
			<a href="index.php" onclick= "return confirm('Pastikan data telah benar, tetap kembali?');"><button type="submit" name="submit">Ubah Data</button></a>
			</li>
		</ul>
	</form>
	<?php } ?>
</body>
</html>