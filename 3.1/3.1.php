<?php
//Filen med antalet besökare
$count_the_page = ("counter.txt");

$hits = file($count_the_page); //anger antal besök till det aktuella värdet av innehållet i counter filen
$hits[0] ++;
$fp = fopen($count_the_page , "w"); //Öppnar filen för skrivning
if (flock($fp, LOCK_EX)) { // flock för att undvika krock i filhantering
fputs($fp , "$hits[0]");
fclose($fp);
} else {
   echo "Fel!";
}
$str = $hits[0];
$html = file_get_contents("3.1.html");// läser html filen
$html1 = str_replace('---$hits---', $str, $html);
echo $html1;

?>