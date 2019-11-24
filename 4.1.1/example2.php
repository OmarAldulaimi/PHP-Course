<?php
header('Content-type: text/plain');
//Hämtar värdena för name och email som sedan skivs ut.
echo "Name = " . $_GET["name"];
echo "\n";
echo "Email = " . $_GET["email"];
?>