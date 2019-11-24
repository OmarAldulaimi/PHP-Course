<?php
//skriver ut info om kakan
	echo "<br />";echo "<br />";
	echo "Följande information inbäddad i kakor sändes nu från dig till webbserversidesprogrammet:";
	echo "<br />";
	echo "<br />";
	echo "Tid = " . $_COOKIE["timeSet"];
	echo "<br />";
	echo "Namn = " . $_COOKIE["cookieName"];
	
?>