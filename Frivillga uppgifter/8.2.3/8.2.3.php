<?php

if(!isset($_COOKIE['nameCookie'])){
	setcookie("timeCookie", date("D, d M Y H:i:s"), time()+10800);
	setcookie("nameCookie", "Jag är en kaka!", time()+10800);
	echo "Du har precis skapat en kaka, visa den "; ?><a href="http://localhost/f/8.2.3/cookie.php/">här</a><?php echo ".";
}

else{
	echo "Du har redan skapat en kaka, visa den "?> <a href="http://localhost/f/8.2.3/cookie.php/">här</a> <?php echo "";
}

?>