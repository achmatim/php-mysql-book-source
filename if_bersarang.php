<?php
$nilai = 82;
$grade = "~";
$keterangan = "GAGAL";
if ($nilai <= 100 && $nilai >= 85) {
	$grade = "A";
	$keterangan = "LULUS";
} else if ($nilai >= 75) {
	$grade = "B";
	$keterangan = "LULUS";
} else if ($nilai >= 60) {
	$grade = "C";
	$keterangan = "LULUS";
} else if ($nilai >= 45) {
	$grade = "D";
} else if ($nilai >= 0) {
	$grade = "E";
} else {
	$grade = "~";
}
?>
