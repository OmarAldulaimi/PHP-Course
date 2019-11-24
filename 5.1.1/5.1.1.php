<?php
	header('Content-type: text/plain');

if ($_POST['password'] == '1234') { //kontrollerar lösenordet

	
	$to = $_POST['to'];
	$subject = $_POST['subject'];
	$message = $_POST['message'] . "\n\n Observera! Detta meddelande är sänt från ett formulär på Internet och avsändaren kan vara felaktig!";;	
	$from = $_POST['from'];
	$cc = $_POST['cc'];
	$bcc = $_POST['bcc'];

	$headers =	"From: " . $from . "\r\n" .
				"Reply-To" . $from . "\r\n" .
				"Cc: " . $cc . "\r\n" .
				"Bcc: " . $bcc;

	mail($to, $subject, $message, $headers); //skicka mailet

	echo "Ditt mail har skickats!" . "\r\n";
	echo $headers;
}

else {
	echo "Fel lösenord. mailet inte skickat.";
}

?>