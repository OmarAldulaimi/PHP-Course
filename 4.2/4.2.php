<?php
	if(!isset($_COOKIE['cookieName'])){
		date_default_timezone_set('Europe/Stockholm'); //sätter zone
		setcookie("cookieName", "Jag är en kaka, ät mig", time()+10800); //sätter kakan
		setcookie("timeSet", date("D, d M Y H:i:s"), time()+10800); //sätter tid
		echo "<br />";
		echo "Du har skapat en kaka som går ut om 3 timmar";
	}
	else{
		echo "<br />";
		echo "Du har redan skapat en kaka som går ut om 3 timmar". "\n";
	}
	echo "<br />";
	echo "<a href='./kakan.php'>Visa kakan</a>";
?>