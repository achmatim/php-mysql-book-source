<?php
include "koneksi.php";

?>
<html>
	<head><title>Data Pegawai</title>
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
		<h2>Data Pegawai</h2>
		<table border="1" width="100%" cellpadding="3" cellspacing="0">
		<tr>
			<th width="7">No</th>
			<th width="20">NIP</th>
			<th>Nama</th>
			<th>Tgl Lahir</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th>Action</th>
		</tr>
		<?php
		$no = 1;
		$query = "SELECT nip, nama, tgllahir, jenkel, alamat
				  FROM pegawai ORDER BY nama";
		$sql = mysql_query ($query) or die(mysql_query());
		while ($hasil = mysql_fetch_array ($sql)) {
			$nip = $hasil['nip'];
			$nama = stripslashes ($hasil['nama']);
			$jenkel = ($hasil['jenkel']=='L')?"Laki-laki" : "Wanita";
			$tgllhr = stripslashes ($hasil['tgllahir']);
			$alamat = stripslashes ($hasil['alamat']);
			$bg = ($no%2==0)?"#efefef" : "#ffffff";
			//
			//tampilkan data pegawai
		?>
			<tr bgcolor="<?=$bg?>">
				<td><?=$no?></td>
				<td><?=$nip?></td>
				<td><?=$nama?></td>
				<td><?=$tgllhr?></td>
				<td><?=$jenkel?></td>
				<td><?=$alamat?></td>
				<td><a href="edit_peg.php?nip=<?=$nip?>">Edit</a> | 
				<a href="delete_peg.php?nip=<?=$nip?>">Delete</a></td>
			</tr>	
		<? $no++; }?>
		</table>
	</body>
</html>