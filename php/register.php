<?php
$servername = "localhost"; // server name, usually localhost
$username = "root"; // username to access the database
$password = ""; // password to access the database
$dbname = "guvi"; // name of the database you want to connect to

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get data from form
$name = $_POST['name'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$number=$_POST['number'];
$password=$_POST['password'];

// Prepare SQL query to insert data into a table
$sql = "INSERT INTO projectg(firstname, dob, email,numb,passwor)
VALUES ('$firstname', '$dob', '$email','$number','$password')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
