<?php 

include("mysql.php");

if( !isset($_GET['id_art']) ){
	// kalau tidak ada id di query string
	header('Location: list.php');
}

//ambil id dari query string
$id = $_GET['id_art'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM artikel_baru WHERE id_art=$id";
$query = mysqli_query($mysqli, $sql);
$data = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>
<body>
    <div class="wrapper">
        <h3>Selamat edit </h3> 
<HTML>
<HEAD><TITLE>Edit Artikel</TITLE></HEAD>
<BODY>
<FORM METHOD="post" ACTION="proses-edit.php"enctype="multipart/form-data"><TABLE>

<TR BGCOLOR="#75946D">
 <TD COLSPAN="2" ALIGN="justify">
 Masukan Artikel Baru</TD></TR>
<TR>
<input type="hidden" name="id_art" value="<?php echo $data['id_art'] ?>" />
 <TD>Judul:</TD>
 <TD><INPUT TYPE="text" NAME="judul" SIZE="64"></TD></TR>
<TR>
<TR>
 <TD>Sumber:</TD>
 <TD><INPUT TYPE="text" NAME="sumber" SIZE="64"></TD></TR>
<TR>
<TR>
 <TD>Tanggal Sumber:</TD>
 <TD><INPUT TYPE="text" NAME="tgl_sumber" SIZE="64"></TD></TR>
<TR>
<TR>
 <TD>Link Sumber:</TD>
 <TD><INPUT TYPE="text" NAME="link_sumber" SIZE="64"></TD></TR>
<TR> 
 <TD VALIGN="top">Isi Artikel:</TD>
 <TD><TEXTAREA NAME="isi_art" ROWS="15" COLS="66"></TEXTAREA></TR>
    <tr><td>Upload Gambar:</td>
        <td><input type="file" name="file"></td>
    </tr>
<TR>
 <TD>Editor:</TD>
 <TD><INPUT TYPE="text" NAME="editor" SIZE="64"></TD></TR>
<TR>
<TR>
 <TD>Tanggal edit:</TD>
 <TD><INPUT TYPE="text" NAME="tgl_edit" SIZE="64"></TD></TR>
<TR>
<TR><TD COLSPAN="2" ALIGN="justify">
 <INPUT type="submit" name="upload" value="Upload"></TD></TR>
 </table></form>
</body>
</HTML>
        
        <p>Apabila ingin Keluar bisa klik tombol di bawah ini<br>
            <a href="logout.php">Logout</a>
        </p>
    </div>
</body>


</html>