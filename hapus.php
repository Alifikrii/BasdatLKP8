<?php

include("config.php");
if (isset($_GET['id'])) {
    // ambil id dari querry string
    $id = $_GET['id'];

    // buat querry hapus 
    $querry = pg_query("DELETE FROM calonsiswa WHERE id=$id");

    // apakah querry hapus berhasill?

    if ($querry) {
        header('location: daftarsiswa.php');
    }
    else {
        die("gagal menghapus...");
    }
}
else {
    die("Akses dilarang...");
}
?>