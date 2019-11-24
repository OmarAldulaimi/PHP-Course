<?php
	$db = mysqli_connect("localhost", "root", "", "hej");
	$msg = "";

	if (isset($_POST['upload'])) {
		$target = "images/".basename($_FILES['image']['name']); // images fil som alla bilder ska sparas i


		$image = $_FILES['image']['name'];
		$name= $_POST['name'];
		$price= $_POST['price'];

// lägger in informationen till databasen
		$sql =  "INSERT INTO `tbl_product` (`name`, `image`, `price`)
VALUES ('$name', '$image', '$price')";
		mysqli_query($db, $sql);

		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) { // sparar bilden i image fil
			$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
		}
	}
	echo $msg; // skriver ut om uppladdningen är okej eller ej

?>
