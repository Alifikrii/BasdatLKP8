<?php 

    include("config.php"); 
    if (isset($_POST['submit'])) {
        $id  = $_POST['id'];
        $nama = $_POST['nama'];
	    $alamat = $_POST['alamat'];
	    $jk = $_POST['jenis_kelamin'];
	    $sekolah = $_POST['sekolah_asal'];

        $query = pg_query("UPDATE calonsiswa SET 
				nama = '$nama',
                alamat = '$alamat',
				jenis_kelamin ='$jk',
				sekolah_asal = '$sekolah'
				WHERE Id = '$id'");

    if ($querry==TRUE) {
        header('Location: daftarsiswa.php?submit=sukses');
    }
    else {
        header('Location: daftarsiswa.php?submit=Gagal');
    }
}
    else{
        die("AKSES DILARANG");
    }

    
?>
