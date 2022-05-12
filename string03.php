<?php
echo "Menampilkan karakter ASCII";
for ($i=1; $i<=256; $i++) {
	echo "<br/>$i.\t". chr($i);
}
?>