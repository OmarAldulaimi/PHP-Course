<!DOCTYPE html>

<html>
  <head>
    <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=iso-8859-1"/>
    <title>
      Exempel
    </title>
  </head>
  <body>
    <form method="post" action="send.php">
      <table>
        <tr>
          <td> Namn:</td>
          <td><input type="text" name="name"/></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><input type="text" name="email"/></td>
        </tr>
        <tr>
          <td>Hemsida:</td>
          <td><input type="text" name="url"/></td>
        </tr>
        <tr>
          <td>Kommentar:</td>
		  <td><textarea name="message" rows="6" cols="40"></textarea></td>
		 </tr>
      </table>
      <p>
        <input type="submit" value="Send message" name="push_button"/>
      </p>
    </form>
    <?php
    
$conn = mysqli_connect("localhost", "root", "", "testdb"); // öppna databasen

// kontrollerar förbindelse
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // om fel inträffar visa fel meddelande
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
	

		
  </body>
</html>

