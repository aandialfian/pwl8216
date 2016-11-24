<html>
	<head>
		<title>Penanganan Form</title>
	</head>
	
	<body>
		<?php
		
			$submit = $_POST['btnsubmit'];
			if(isset($submit)){
				$nama = $_POST['txtnama'];
				$nim = $_POST['txtnim'];
				$kota = $_POST['txtkota'];
				$telepon = $_POST['txttelepon'];
				$alamat = $_POST['txtalamat'];
				
				echo"Nilai yang di tangkap oleh server <br /><br />";
				echo"Nama 	 : <strong>$nama</strong><br />";
				echo"Nim	 : <strong>$nim</strong><br />";
				echo"Kota	 : <strong>$kota</strong><br />";
				echo"Telepon : <strong>$telepon</strong><br />";
				echo"Alamat	 : <strong>$alamat</strong><br />";
				
			}
		
		?>
	</body>
</html>