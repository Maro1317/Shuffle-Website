<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="users"; 
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "SELECT userName, userEmail, userPass FROM usersinfo where userName = 'asd' and userPass = '1311'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " Name: " . $row["userName"]. " - Email: " . $row["userEmail"]. " Password : " . $row["userPass"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>