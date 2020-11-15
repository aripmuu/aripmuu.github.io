<?php

include("mysql.php");

if( isset($_GET['id_art']) ){
	
	// ambil id dari query string
	$id = $_GET['id_art'];
	
	// buat query hapus
	$sql = "DELETE FROM artikel_baru WHERE id_art=$id";
	$query = mysqli_query($mysqli, $sql);
	
	// apakah query hapus berhasil?
	if( $query ){
		header('Location: list.php');
	} else {
		die("gagal menghapus...");
	}
	
} else {
	die("akses dilarang...");
}

?>