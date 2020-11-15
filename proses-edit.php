<?php

include("mysql.php");
if(isset($_POST['judul'])){
    $id = $_POST['id_art'];
	$judul = $_POST['judul'];
    $sumber = $_POST['sumber'];
    $ts = $_POST['tgl_sumber'];
	$ls = $_POST['link_sumber'];
    $ia = $_POST['isi_art'];
    $ekstensi_diperbolehkan	= array('png','jpg');
	$nama = $_FILES['file']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)
		if($ukuran < 1044070)			
			move_uploaded_file($file_tmp, 'images/'.$nama);
    $thor = $_POST['editor'];
    $te = $_POST['tgl_edit'];
	$sql = "UPDATE artikel_baru SET judul='$judul', sumber='$sumber', tgl_sumber='$ts', link_sumber='$ls', isi_art='$ia', link_img='$nama', editor='$thor', tgl_edit='$te'  WHERE id_art=$id";
	$query = mysqli_query($mysqli, $sql);
	
	// apakah query update berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman list-siswa.php
		header('Location: list.php');
	} else {
		// kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}
	
	
} else {
	die("Akses dilarang...");
}

?>