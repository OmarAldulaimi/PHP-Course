<?php
//Sätter $name till det värde som skickats med POST-metoden.
	$name = $_POST["name"];
	//läser in HTML-sidan och ---$name--- ersätts med värdet hos $name.
	$html = file_get_contents("sida2.html");
	eval("print \"" . addcslashes(preg_replace("/(---(.+?)---)/", "\\2", $html), '"') . "\";");
?>