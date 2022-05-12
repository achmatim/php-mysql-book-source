<?php
$arrPresiden = array("Soekarno","Soeharto","Habibie","Gusdur","SBY","Jokowi");
echo "Presiden RI dari masa ke masa";
echo "<ol>";
foreach($arrPresiden as $presiden) {
	echo "<li>$presiden</li>";
}
echo "</ol>";
?>