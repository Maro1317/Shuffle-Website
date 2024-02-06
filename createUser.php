<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$email = $_POST['email'];
$pass = $_POST['password'];
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO users (user_email, user_password )
VALUES ('$email','$pass')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Location: login.html");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




//echo $email;
//echo $password;

?>