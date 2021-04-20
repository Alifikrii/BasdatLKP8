<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
	<header>
		<h3>Formulir Pendaftaran Siswa Baru</h3>
	</header>

	<form action="prosespendaftaran.php" method="POST">
		<fieldset>
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" />
		</p>
		<p>
			<label for="alamat">Alamat: </label>
			<textarea name="alamat"></textarea>
		</p>
		<p>
			<label for="jenis_kelamin">Jenis Kelamin: </label>
			<label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
			<label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
		</p>
		<p>
			<label for="sekolah_asal">Sekolah Asal: </label>
			<input type="text" name="sekolah_asal" placeholder="nama sekolah" />
		</p>
		<p>
			<input type="submit" value="Daftar" name="daftar" />
		</p>
		</fieldset>
	</form>
	<a href="index.php" onclick= "return confirm('HALO ILKOMERS Pastikan data telah disimpan, tetap kembali?');">Kembali Ke Halaman Awal...</a>
	</body>
</html>
