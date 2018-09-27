<form method="GET" Kartun=" " enctype="multipart/form-data">
	GENRE FILM <br>
	Fantasy <input type="checkbox" name="genre[]" value="Fantasy">
	Kartun <input type="checkbox" name="genre[]" value="Kartun">
	Horror<input type="checkbox" name="genre[]" value="Horror">
	Rumansai <input type="checkbox" name="genre[]" value="Rumansai">
	Kingdom <input type="checkbox" name="genre[]" value="Kingdom"><br><br>
	TUJUAN TRAVEL <br>
	Toraja <input type="checkbox" name="travel[]" value="Toraja">
	Raja Ampat <input type="checkbox" name="travel[]" value="Raja Ampat">
	Lombok <input type="checkbox" name="travel[]" value="Lombok">
	Pantai Seruni <input type="checkbox" name="travel[]" value="Pantai Seruni">
	Pulau Natuna <input type="checkbox" name="travel[]" value="Pulau Natuna"><br><br>

	Masukan FOTO<br><input type="file" name="foto"><br><br>
	<input type="submit" name="upload" value="upload">
	<input type="submit" name="delete" value="delete">
</form>
<?php  
if (isset($_GET['upload'])) {
	$m = $_GET['travel'];
	$n = $_GET['genre'];
	echo "GENRE film yang di pilih : <br>";
	foreach ($n as $key) {
		echo $key.'<br>';	
	}
	echo "<br>";
	echo "TUJUAN Travel di : <br>";
	foreach ($m as $tra) {
		echo $tra.'<br>';	
	}
	$upload = 'Foto/';
	$uploadFile = $upload.basename($_FILES['foto']['name']);
	$namePhoto = $_FILES['foto']['name'];
	if (move_uploaded_file($_FILES['foto']['tmp_name'], $uploadFile)) {
	 echo "<img src='Foto/$namePhoto'>";	
	}
	
	if (isset($_GET['delete'])) {
		foreach ($m as $m) {
			unset($m);
		}
		foreach ($n as $n) {
			unset($n);
		}
	}
}
?>