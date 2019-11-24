<?php

header('Content-type: text/plain');
/* Skriver ut de textboxar som är ifyllda. samt alla andra input */
echo "\n";
if (isset($_POST['text_box'])) {
   echo "Text_box = " . $_POST['text_box'] . "\n";
} 
if (isset($_POST['text_area'])) {
   echo "Text_area = " . $_POST['text_area'] . "\n";
}
if (isset($_POST['check_box'])) {
   echo "Check_box = " . $_POST['check_box'] . "\n";
}else {
	 echo "Check_box = " . "OFF" . "\n";
}
if (isset($_POST['radio_button'])) {
   echo "Radio_buton = " . $_POST['radio_button'] . "\n";
}else if(isset ($_POST['radio_button2'])){
	 echo "Radio_buton = " . $_POST['radio_button2'] . "\n";
}
if (isset($_POST['drop_down_menu'])) {
   echo "Drop down menu = " . $_POST['drop_down_menu'] . "\n";
}else {
	 echo "Drop down menu = " . "Värde2" . "\n";
}
   
if (isset($_POST['push_button'])) {
   echo "Tryck mig = " . $_POST['push_button'] . "\n";
}else{
echo 'X:'.$_POST["image_x"]. "\n" . 'Y:'.$_POST["image_y"];
}

?>