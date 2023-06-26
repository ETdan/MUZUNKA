<?php 

$servername = "localhost";
$username = "root";
$pass = "";
$db = "MUZUNKA";

// Create connection
$conn = new mysqli($servername, $username,$pass,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " .$conn->connect_error);
}
//  echo "Connected successfully";

// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }

?>