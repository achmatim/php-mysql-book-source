<?php
function luas_lingkaran ($jari) {
	return 3.14 * $jari * $jari;
}
function cetak_ganjil ($awal, $akhir) {
	for ($i=$awal; $i<$akhir; $i++) {
		if ($i%2 == 1) {
			echo "$i ";	
		}
	}
}

$arr = get_defined_functions();
echo "<pre>";
print_r($arr);
echo "</pre>";
?>
