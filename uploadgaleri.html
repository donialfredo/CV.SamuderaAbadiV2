<?php
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$foto = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./assets/img/" . $foto;
	
	$db = mysqli_connect("localhost", "root", "", "samuderaabadi");

	// Get all the submitted data from the form
	$sql = "INSERT INTO tabelgaleri VALUES ('','$foto')";

	// Execute query
	mysqli_query($db, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Upload</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css" />
  	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body>
	<div class="w3-card-4">
	<div class="w3-container w3-green">
		<h2>Upload Galeri</h2>
	</div>

		<form class="w3-container" method="POST" action="" enctype="multipart/form-data">
            	<label>Foto :</label>
				<input class="w3-input" type="file" name="uploadfile" value="" />
				<br>
				<button class="w3-btn w3-blue" type="submit" name="upload">UPLOAD</button>
		</form>
	</div>
</body>

</html>
