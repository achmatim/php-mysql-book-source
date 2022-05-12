<?php
include "koneksi.php";

//proses input berita
if (isset($_POST['Input'])) {
	$nip = addslashes (strip_tags ($_POST['nip']));
	$nama = addslashes (strip_tags ($_POST['nama']));
	$tgllahir = $_POST['thn']."-".$_POST['bln']."-".$_POST['tgl'];
	$jenkel = $_POST['jenkel'];
	$alamat = addslashes (strip_tags ($_POST['alamat']));
	
	if (strlen ($nip) != 6) {
		die ("NIP harus 6 digit");	
	}
	//insert ke tabel
	$query = "INSERT INTO pegawai VALUES('$nip','$nama','$tgllahir','$jenkel','$alamat')";
	$sql = mysql_query ($query);
	if ($sql) {
		echo "<h2><font color=blue>Data Pegawai telah berhasil ditambahkan</font></h2>";	
	} else {
		echo "<h2><font color=red>Data Pegawai gagal ditambahkan</font></h2>";	
	}
}
?>
<html>
	<head><title>Input Data Pegawai</title>
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
		<form action="" method="post" name="input">
			<table cellpadding="0" cellspacing="0" border="0" width="700">
				<tr>
					<td colspan="2"><h2>Input Data Pegawai</h2></td>
				</tr>
				<tr>
					<td width="200">NIP</td>
					<td>: <input type="text" name="nip" size="15" maxlength="10"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>: <input type="text" name="nama" size="30" maxlength="30"></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td>: 
					<select name="tgl">
					<?php
						for ($i=1; $i<=31; $i++) {
							$tg = ($i<10) ? "0$i" : $i;
							echo "<option value='$tg'>$tg</option>";	
						}
					?>
					</select> - 
					<select name="bln">
					<?php
						for ($i=1; $i<=12; $i++) {
							$bl = ($i<10) ? "0$i" : $i;
							echo "<option value='$bl'>$bl</option>";	
						}
					?>
					</select> - 
					<select name="thn">
					<?php
						for ($i=1970; $i<=2000; $i++) {
							echo "<option value='$i'>$i</option>";	
						}
					?>
					</select>
					</td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>: <input type="radio" name="jenkel" value="L" checked> Pria &nbsp;&nbsp;
					<input type="radio" name="jenkel" value="P"> Wanita</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>: <textarea name="alamat" cols="50" rows="5"></textarea></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;&nbsp;<input type="submit" name="Input" value="Input Data">&nbsp;
					<input type="reset" name="reset" value="Reset"></td>
				</tr>
			</table>
		</FORM>
	</body>
</html>