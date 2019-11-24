<?php 
header('Content-type: text/plain');
echo "\n";
 $str = $_SERVER["QUERY_STRING"]; //tar emot hela strängen
  parse_str($str,$arr); //delar upp strängen till en array
  foreach($arr as $key => $value){ //delar upp det till en key och en value
    echo "$key = $value" . "\n";
  }
  
  
  // ett annant sätt
  echo "\n";
  echo "Ett annat sätt";
  echo "\n";
  echo "name = " . $_GET["name"];
echo "\n";
echo "email = " . $_GET["email"];
?>