<?php
class Mobil
{
	var $warna = "Biru";
	var $merk = "BMW";
	var $harga = 1000000;
	
	function gantiWarna ($warnaBaru)
	{
		$this->warna = $warnaBaru;
	}
	
	function tampilWarna ()
	{
		echo "Warna mobilnya : " . $this->warna;
	}
}
?>