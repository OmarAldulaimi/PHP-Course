<?php
header('Content-type: text/plain');
echo "\n";
echo "Name = " . $_POST["name"]. "\n";
echo "Email = " . $_POST["email"] . "\n";
if (isset($_POST['push_button'])) {
   echo "Button = " . $_POST['push_button'];
   }
?>