<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `users`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"].'<br>'. "Name: " . $row["username"]. '<br>'. "email " . $row["email"]. "<hr>";
  }
} else {
  echo "0 results";
}
$conn->close();






    /*INSERT INTO `users` 
        (`username`, `email`, `name`, `password`)
    VALUES 
        ('bek', 'e@gmailcom','bilguun', 'bilguun0207');
    */
?>