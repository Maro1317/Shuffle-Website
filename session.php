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

$sql = "SELECT user_id,user_email , user_password FROM users  WHERE user_email = '$email' and user_password = '$pass' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        session_start();
        $_SESSION['email2'] = $_POST['email'];
        header("Location: project.php");
      }
  
} else {
    header("Location: login.html");
    alert("Incorrect password");
}
$conn->close();










?>

