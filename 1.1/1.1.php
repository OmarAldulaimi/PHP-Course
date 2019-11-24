<?php
header('Content-type: text/plain');
$count_the_page = ("counter.txt");
//anger antal besök till det aktuella värdet av innehållet i counter filen
$hits = file($count_the_page); 
$hits[0] ++; //ökar antalet med 1
$fp = fopen($count_the_page , "w"); //öppnar filen i skrivläge
if (flock($fp, LOCK_EX)) { // flock för att undvika krock i filhantering
fputs($fp , "$hits[0]");
fclose($fp);
} else {
    echo "Fel!";
}
echo $hits[0];

?>
