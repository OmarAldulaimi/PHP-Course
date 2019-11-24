<?php
	$db = mysqli_connect("localhost", "root", "", "hej");
	$msg = "";

	if (isset($_POST['upload'])) {
		$target = "images/".basename($_FILES['image2']['name']); // images fil som alla bilder ska sparas i


		$image = $_FILES['image2']['name'];
		$name= $_POST['name2'];
		$price= $_POST['price2'];

// lägger in informationen till databasen
		$sql =  "INSERT INTO `table_product2` (`name`, `image`, `price`)
VALUES ('$name', '$image', '$price')";
		mysqli_query($db, $sql);

		if (move_uploaded_file($_FILES['image2']['tmp_name'], $target)) { // sparar bilden i image fil
			$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
		}
	}
	echo $msg; // skriver ut om uppladdningen är okej eller ej

?>