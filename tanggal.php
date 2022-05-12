<?php
$arrHari = array ("Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu","Minggu");
$arrBulan = array ("Januari","Februari","Maret","April","Mei","Juni","Juli",
					"Agustus","September","Oktober","November","Desember");
$d = date ("w");	//0-6
$m = date ("n");	//1-12
echo "<h3>Hari ini : ".$arrHari[$d-1].", ". date ("d"). " " .$arrBulan[$m-1]. " " .date("Y");
echo " Pukul ". date ("H:i:s"). " WIB</h3>";
?>
