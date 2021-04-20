<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

	// ambil data dari formulir
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jenis_kelamin'];
	$sekolah = $_POST['sekolah_asal'];

	// buat query
  $query = pg_query("INSERT INTO calonsiswa (nama, alamat, jenis_kelamin, sekolah_asal) VALUEs ('$nama', '$alamat', '$jk', '$sekolah')");

	// apakah query simpan berhasil?
	if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: index.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: index.php?status=gagal');
	}


} else {
	die("Akses dilarang...");
}
?>
