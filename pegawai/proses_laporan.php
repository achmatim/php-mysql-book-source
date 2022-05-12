<?php
include "koneksi.php";
if(isset($_POST['Cetak'])) {
	foreach ($_POST as $name=>$val) {
		${$name} = $val;
	}
	//filtering
	$filter = array();
	$filter[] = ($jenkel != "")? "jenkel='$jenkel'" : "1";
	$filter[] = ($thnlahir != "")? "YEAR(tgllahir)='$thnlahir'" : "1";

	//query
	$query = "SELECT nip, nama, IF(jenkel='L','Laki-laki','Perempuan') as jenkel,tgllahir ";
	$query .= "FROM pegawai WHERE 1 AND ";
	$query .= implode(" AND ", $filter);
	$query .= " ORDER BY nama";
	
	//echo $query;

	//eksekusi query
	$result = mysql_query($query) or die(mysql_error());
	$data = array();
	while ($row = mysql_fetch_assoc($result)) {
		array_push($data, $row);
	}
	//tampilkan
	//echo "<pre>"; print_r($data); echo "</pre>"; exit;
	if ($output == 'html') {
		//output html
		?>
		<h1>Laporan Data Pegawai</h1>
		<table width="100%" border="1">
			<tr>
				<th>No</th>
				<th>NIP</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Tanggal Lahir</th>
			</tr>
			<?php
			$no = 1;
			foreach ($data as $baris) {
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $baris['nip'] ?></td>
				<td><?php echo $baris['nama'] ?></td>
				<td><?php echo $baris['jenkel'] ?></td>
				<td><?php echo $baris['tgllahir'] ?></td>
			</tr>
			<?php } ?>
		</table>
		<?php
	} else if ($output == "pdf") {
		//laporan pdf
		include "libs/fpdf18/fpdf.php";
		$pdf = new FPDF();
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(40,30, 'Laporan Pegawai');
		$pdf->SetFont('Arial','',11);
		//header tabel
		$pdf->Ln();
		$pdf->Cell(10,8,'No',1);
		$pdf->Cell(20,8,'NIP',1);
		$pdf->Cell(70,8,'Nama',1);
		$pdf->Cell(30,8,'Jenkel',1);
		$pdf->Cell(30,8,'Tanggal Lahir',1);
		
		//isi tabel
		$no = 1;
		foreach($data as $baris) {
			$pdf->Ln();
			$pdf->Cell(10,8,$no++,1);
			$pdf->Cell(20,8,$baris['nip'],1);
			$pdf->Cell(70,8,$baris['nama'],1);
			$pdf->Cell(30,8,$baris['jenkel'],1);
			$pdf->Cell(30,8,$baris['tgllahir'],1);
		}
		$pdf->Output();
	} else if ($output == "excel") {
		require_once "libs/Excel.class.php";
		$excel = new Excel();
		#Send Header
		$excel->setHeader('laporan-pegawai.xls');
		$excel->BOF();

		#header tabel
		$excel->writeLabel(0, 0, "NIP");
		$excel->writeLabel(0, 1, "NAMA");
		$excel->writeLabel(0, 2, "JENIS KELAMIN");
		$excel->writeLabel(0, 3, "TANGGAL LAHIR");

		#isi data
		$i = 1;
		foreach ($data as $baris) {
			$j = 0;
			foreach ($baris as $value) {
				$excel->writeLabel($i, $j, $value);
				$j++;
			}
			$i++;
		}

		$excel->EOF();

		exit();
	}
}
?>