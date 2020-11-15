<?php
include "mysql.php"
?>
	<HEAD><TITLE>Daftar Artikel</TITLE></HEAD>
	<BODY>
		<CENTER>
		<TABLE>
				<tr><td>
				|<a href='index2.php'>New</a> |
				</td></tr>
		<TR BGCOLOR='#DDDDDD'><TH COLSPAN='3'>----------------------------------------- Daftar Artikel -----------------------------------------</TH></TR>
		<?php
			$perpage = 2;
			$query = mysqli_query( $mysqli, "SELECT COUNT(`id_art`) FROM `artikel_baru`");
			function mysqli_result($result, $number, $field=0) 
			{ 
    			mysqli_data_seek($result, $number); 
    			$type = is_numeric($field) ? MYSQLI_NUM : MYSQLI_ASSOC; 
    			$out = mysqli_fetch_array($result, $type); 
    			if ($out === NULL || $out === FALSE || (!isset($out[$field]))) { return FALSE; } return $out[$field]; 
			}
			$jumlah_post = mysqli_result($query, 0);
			if (!isset($_GET['page']) or ($_GET['page']<0)
 				or ($_GET['page'] > $jumlah_post)) $page = 1;
 			else $page = $_GET['page'];
			$offset = ($page -1) * $perpage;
			$query = mysqli_query( $mysqli, "SELECT * FROM `artikel_baru`
 			ORDER BY `id_art` DESC LIMIT $offset, $perpage");
			while ($data = mysqli_fetch_array($query))
			{
    			echo "<TABLE><TR><TD>Judul</TD><TD>:</TD>";
    			echo "<TD>".$data['judul']."</TD></TR>";
    			echo "<TR VALIGN='top'><TD>Tanggal</TD><TD>:</TD>";
				echo "<TD>".$data['tgl_sumber']."</TD></TR></TABLE>"; 
				
				echo "<TABLE><tr><td>";
				echo "|<a  href='full.php?id_art=".$data['id_art']."'>Full</a> |";
				echo "|<a href='form-edit.php?id_art=".$data['id_art']."'>Edit</a> |";
				echo "|<a href='hapus.php?id_art=".$data['id_art']."'>Hapus</a> |";
				echo "</td></tr></TABLE>";

				?>
				<table ALIGN = "CENTER">
					<tr>
				<td>
					<img src="<?php echo "images/".$data['link_img']?>" ALIGN='middle' WIDTH="350" HEIGHT="" >
				</td>		
					</tr>
				</table>

				<table ALIGN = 'CENTER'>
				<TR><TD>----------------------------------------------------------------------------------------------------------------------</TD></TR>
				</table>
				
				<?php
			}
			echo "<TR><TD COLSPAN=3 ALIGN='right'>";
			for ($i = 1; $i <= ceil ($jumlah_post/$perpage); $i++)
			{
 				if ($i == $page) echo "<B>$i</B> ";
 				else echo "<A HREF='?page=$i'>$i</A> ";
			}
			echo "</TD></TR>\n";
		?>
		</table>
		<CENTER>
	</BODY>
