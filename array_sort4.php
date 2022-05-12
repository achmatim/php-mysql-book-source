<?php
$arrImage = array("img12.png", "img10.png", "img2.png", "img1.png");
echo "<b>Array sebelum pengurutan</b>";
echo "<pre>";
print_r($arrImage);
echo "</pre>";

sort($arrImage);
reset($arrImage);
echo "<b>Array setelah pengurutan dengan sort()</b>";
echo "<pre>";
print_r($arrImage);
echo "</pre>";

natsort($arrImage);
reset($arrImage);
echo "<b>Array setelah pengurutan dengan natsort()</b>";
echo "<pre>";
print_r($arrImage);
echo "</pre>";
?>
