<html>
	<head><title>Laporan Data Pegawai</title>
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
		<h1>Laporan Data Pegawai</h1>
		<form action="proses_laporan.php" method="post">
			Jenis kelamin: <br/>
			<select name="jenkel">
				<option value="">Semua</option>
				<option value="L">Laki-laki</option>
				<option value="P">Perempuan</option>
			</select><br/><br/>
			Tahun kelahiran: <br/>
			<select name="thnlahir">
				<option value="">Semua</option>
				<?php
				for($tahun = 1960; $tahun<=2000; $tahun++) {
					echo "<option value=$tahun>$tahun</option>";
				}
				?>
			</select><br/><br/>
			Output Laporan:<br/>
			<input type="radio" name="output" value="html"/> HTML &nbsp;&nbsp;
			<input type="radio" name="output" value="pdf"/> PDF &nbsp;&nbsp;
			<input type="radio" name="output" value="excel"/> Excel (Spreadsheet)
			<br/><br/>
			<input type="submit" name="Cetak" value="Cetak"/>
			<input type="reset" name="Reset" value="Reset"/>
		</form>
	</body>
</html>