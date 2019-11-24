<?php
//kontrollera ifall ingen fil är vald
if ($_FILES["file"]["error"] > 0){
	header('Content-Type: text/plain');
    echo "Ingen vald fil!";
	
}
// Kontrollerar filens storlek, får inte vara större än 1MB.
else if ($_FILES["file"]["size"] > 1048576){
	header('Content-Type: text/plain');
    echo "För stort fil!";

//kontrollerar om bilden är en av tillåtna typ
} else if ((($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "text/plain"))){
	move_uploaded_file($_FILES["file"]["tmp_name"], "./uploads/" . $_FILES["file"]["name"]); //sparar de i fil som heter uploads

	if($_FILES["file"]["type"] == "image/jpeg" ||$_FILES["file"]["type"] == "image/jpg"){
		$im = imagecreatefromjpeg("./uploads/" . $_FILES["file"]["name"]);
		header('Content-Type: image/jpeg');
		imagejpeg($im, NULL, 75);
		imagedestroy($im);
	}
	
	elseif($_FILES["file"]["type"] == "image/png"){
		$im = imagecreatefrompng("./uploads/" . $_FILES["file"]["name"]);
		header('Content-Type: image/png');
		imagepng($im);
		imagedestroy($im);
	}
	
	elseif($_FILES["file"]["type"] == "text/plain"){
		$txtFile = "./uploads/" . $_FILES["file"]["name"];
		$openFile = fopen($txtFile, 'r'); //öppna filen och läsa av den
		$readFile = fread($openFile, filesize($txtFile));
		fclose($openFile);
		header('Content-Type: text/plain');
		echo $readFile;
	}
	
} else {
//Om filen är av någon annan typ än de ovan skrivs filnamn, typ och storlek ut
	header('Content-type: text/plain');
	echo "Filnamn: " . $_FILES["file"]["name"];
	echo "\nTyp:: " . $_FILES["file"]["type"];
	echo "\nStorleken: " . ($_FILES["file"]["size"]) . " byte";
}
?>