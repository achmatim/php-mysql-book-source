<html>
	<head><title>Upload File</title></head>
	<body>
		<form action="" method="post" enctype="multipart/form-data">
			Upload File : <input type="file" name="file"/><br/>
			<input type="submit" name="Upload" value="Upload"/>
		</form>
		<?php
		if (isset($_POST['Upload'])) {
			$dir_upload = dirname(__FILE__)."/images/";
			$nama_file  = $_FILES['file']['name'];
			//
			if (is_uploaded_file($_FILES['file']['tmp_name'])) {
				$cek = move_uploaded_file ($_FILES['file']['tmp_name'], $dir_upload.$nama_file);
				if ($cek) {
					die ("File berhasil diupload");	
				} else {
					die ("File gagal diupload");	
				}
			}
		}
		?>
	</body>
</html>
