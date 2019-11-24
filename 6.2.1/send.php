<?php

if (isset($_POST['name'])) {
$name= $_POST['name'];
} 
if (isset($_POST['email'])) {
$email= $_POST['email'];
} 
if (isset($_POST['url'])) {
$url= $_POST['url'];
} 
if (isset($_POST['message'])) {
$message= $_POST['message'];
} 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

// skapar förbindelse
$conn = new mysqli($servername, $username, $password, $dbname); 
// kontrollerar förbindelse
if ($conn->connect_error) {
    die("Connection misslyckads: " . $conn->connect_error);
} 
$t = date('Y-d-m H:i:s'); // nuvarande tid

$sql = "INSERT INTO users (name, email, url,date, message)
VALUES ('$name', '$email', '$url','$t', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Ny post skapades" . "<br>";
} else {
    echo "FEL: " . $sql . "<br>" . $conn->error;
}

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM users ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output för varje rad
    while($row = $result->fetch_assoc()) {
        echo "inlägg: " . $row["id"]. "<br>". "<br>"."Tid: " . $row["date"]. "<br>"." Från: " . $row["name"]. "<br>". "E-post: " . "<a href='" . $row["email"] . "'> " . $row["email"] . "</a>"."<br>". "Hemsida: " . "<a href='" . $row["url"] . "'> " . $row["url"] . "</a>"."<br>". "<br>". "Kommentar: " . $row["message"]. "<br>"."----------------------". "<br>";
    }
} else {
    echo "0 results";
}



$conn->close();
?>