<?php
session_start();

if (!$_SESSION["is_login"] === TRUE) {
    header("location: index.php");
    exit;
}
?>
<body>
    <div class="wrapper">
        <h3>Selamat datang di Halaman Manage Artikel </h3> 
    <p>Apabila ingin melhat list artikel:<br>
    <a href="list.php">list artikel</a>
    </p>
        <HTML>
<HEAD><TITLE>Artikel Baru</TITLE></HEAD>
<BODY>
<FORM METHOD="post" ACTION="list-artikel.php"enctype="multipart/form-data"><TABLE>
<TR BGCOLOR="#75946D">
 <TD COLSPAN="2" ALIGN="justify">
 Masukan Artikel Baru</TD></TR>
<TR>
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
