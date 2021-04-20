<?php include("config.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
	<header>
		<h3>Siswa yang sudah mendaftar</h3>
	</header>

	<nav>
		<a href="formdaftar.php">[+] Tambah Baru</a>
	</nav>

	<br>

	<table border="1">
	<thead>
		<tr>
			<th>ID Siswa</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Sekolah Asal</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	<tbody>

		<?php
		$query = pg_query("SELECT * FROM calonsiswa");
		// $query = mysqli_query($db, $sql);

		while($siswa = pg_fetch_array($query)){
			echo "<tr>";

			echo "<td>".$siswa['id']."</td>";
			echo "<td>".$siswa['nama']."</td>";
			echo "<td>".$siswa['alamat']."</td>";
			echo "<td>".$siswa['jenis_kelamin']."</td>";
			echo "<td>".$siswa['sekolah_asal']."</td>";

			echo "<td>"; ?>
			<a href="hapus.php?id= <?= $siswa["id"] ?>" onclick= "return confirm('KAMU yakin ingin menghapus?');">  HAPUS
			 </a>
			<?php echo"||";
			echo "<a href='formedit.php?id=".$siswa["id"].
					"&nama=".$siswa['nama'].
					"&alamat=".$siswa['alamat'].
					"&sekolah=".$siswa['sekolah_asal'].
					"&jk=".$siswa['jenis_kelamin']."'> Edit </a>";
			echo "</td>";

			echo "</tr>";

			}


		?>

	</tbody>
	</table>

	<p>Total: <?php echo pg_num_rows($query) ?></p>
	<a href="index.php">Kembali Ke Halaman Awal</a>
	</body>
</html>
