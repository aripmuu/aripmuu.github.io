<?php

if (isset($_POST['upload']))

{
 foreach ($_POST as $key=>$value) $_POST[$key] = addslashes ($value);

}

if ($db = @mysqli_connect("localhost","root",""))
{
	mysqli_select_db($db, "hiyahiya");
	$ekstensi_diperbolehkan	= array('png','jpg');
	$nama = $_FILES['file']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];	

	if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		if($ukuran < 1044070){			
			move_uploaded_file($file_tmp, 'images/'.$nama);
   			$query = mysqli_query($db,"INSERT INTO `artikel_baru`
    		(judul,sumber,tgl_sumber,link_sumber,isi_art,link_img,editor,tgl_edit)
    		values
    		('".$_POST['judul']."'
    		, '".$_POST['sumber']."'
    		, '".$_POST['tgl_sumber']."'
    		, '".$_POST['link_sumber']."'
    		, '".$_POST['isi_art']."'
			,'$nama'
    		, '".$_POST['editor']."'
    		, '".$_POST['tgl_edit']."')");
			if ($query == false ){ echo "Tidak bisa menyimpan, alasan MySQL karena:".mysqli_error($db);
			}else{ header ("location: list.php");
			}
		}else{ echo 'UKURAN FILE TERLALU BESAR';
		}
	}else{ echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
	}
}else{ echo "Tidak bisa menyimpan, Alasan MySQL :".mysqli_error();
}
?>
