<?php
include "mysql.php";
if( isset($_GET['id_art']) ){
	

	$id = $_GET['id_art'];
	$sql = "SELECT * FROM artikel_baru WHERE id_art=$id";
	$query = mysqli_query($mysqli, $sql);
	$data = mysqli_fetch_assoc($query);
	
		echo "<TABLE><TR><TD>Judul</TD><TD>:</TD>";
		echo "<TD>".$data['judul']."</TD></TR>";
		echo "<TR VALIGN='top'><TD>Tanggal</TD><TD>:</TD>";
		echo "<TD>".$data['tgl_sumber']."</TD></TR>";
		echo "<TR VALIGN='top'><TD>link sumber</TD><TD>:</TD>";
		echo "<TD>".$data['link_sumber']."</TD></TR>";
		echo "<TR VALIGN='top'><TD>isi</TD><TD>:</TD>";
		echo "<TD>".$data['isi_art']."</TD></TR>";
		?>
				<table ALIGN = "CENTER">
					<tr>
				<td>
					<img src="<?php echo "images/".$data['link_img']?>" ALIGN='middle' WIDTH="350" HEIGHT="" >;
				</td>		
					</tr>
				</table>
		<?php
	
}
?>
