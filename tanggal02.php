<?php
$arrDay = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu");
$day = date ("w");	//0 - 6 of day

echo "Hari ini hari : <b>" . $arrDay[$day]."</b>";
?>