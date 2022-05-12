<?php
include "koneksi.php";

if (isset($_GET['nip'])) {
	$nip = $_GET['nip'];
} else {
	die ("Error. No nip Selected! ");	
}
?>
<html>
	<head><title>Delete Data Pegawai</title>
	<STYLE TYPE="text/css" MEDIA="screen, projection">
	<!--
	  @import url(style.css);
	-->
	</STYLE>
	</head>
	<body>
		<a href="tampil.php">Tampil Data Pegawai</a> | 
		<a href="input_peg.php">Input Data Pegawai</a> | 
		<a href="laporan.php">Laporan</a>
		<br><br>
		<?php
		//proses delete berita
		if (!empty($nip) && $nip != "") {
			
			$query = "DELETE FROM pegawai WHERE nip='$nip'";
			$sql = mysql_query ($query);
			if ($sql) {
				echo "<h2><font color=blue>Data Pegawai telah berhasil dihapus</font></h2>";	
			} else {
				echo "<h2><font color=red>Data pegawai gagal dihapus</font></h2>";	
			}
			echo "Klik <a href='tampil.php'>di sini</a> untuk kembali ke halaman data pegawai";
		} else {
			die ("Access Denied");	
		}
		?>
	</body>
</html>