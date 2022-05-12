<html>
	<head><title>Film Kartun Favorit ~ Inputan Combobox</title></head>
	<body>
		<form action="" method="post" name="input">
			<h2>Pilih Film Kartun Favorit Anda :</h2>
			<select name="kartun">
				<option value="Sponge Bob">Sponge Bob</option>
				<option value="Sinchan">Sinchan</option>
				<option value="Conan">Conan</option>
				<option value="Doraemon">Doraemon</option>
				<option value="Dragon Ball">Dragon Ball</option>
				<option value="Naruto">Naruto</option>
			</select> 
			<input type="submit" name="Pilih" value="Pilih"> 
		</form>
		<?php
		if (isset($_POST['Pilih'])) {
			$film = $_POST['kartun'];
			echo "Film Kartun Favorit Anda adalah : 
				  <font color=blue><b>$film</b></font>";
		}
		?>
	</body>
</html>