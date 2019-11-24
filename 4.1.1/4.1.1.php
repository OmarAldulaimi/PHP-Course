<?php
//Sätter $name till det värde som skickats med GET-metoden.
	$name = $_GET["name"];
	//läser in HTML-sidan second_page där ---$name--- ersätts med värdet hos $name.
	$html = file_get_contents("page2.html");
	eval("print \"" . addcslashes(preg_replace("/(---(.+?)---)/", "\\2", $html), '"') . "\";");
?>