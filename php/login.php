<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
    header('Access-Control-Allow-Headers: token, Content-Type');
    header('Access-Control-Max-Age: 1728000');
    header('Content-Length: 0');
    header('Content-Type: text/plain');
    die();
}

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$ret = [
    'result' => 'OK',
];
print json_encode($ret);
$servername = "localhost"; // server name, usually localhost
$username = "root"; // username to access the database
$password = ""; // password to access the database
$dbname = "guvi"; // name of the database you want to connect to

// // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// // Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

Get data from form
$email = $_POST['email'];
$password = $_POST['password'];
header('Access-Control-Allow-Origin: http://127.0.0.1:5500');
    $email = $_POST['email'];
    echo ("Hello from server: $email");
    HttpResponse::setData('Incorrect Length for Password');
HttpResponse::send();
Check if the request was made using the POST method
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Check if the email and password were provided in the request data
    if (isset($_POST['email']) && isset($_POST['password'])) {
  
      // Get the email and password from the request data
      $email = $_POST['email'];
      $password = $_POST['password'];
  
      // TODO: Check if the email and password are valid and match a user in your database
  
      // If the email and password are valid, return a success message
      $response = array('status' => 'success', 'message' => 'Login successful!');
  
    } else {
  
      // If the email and password were not provided, return an error message
      $response = array('status' => 'error', 'message' => 'Email and password are required.');
  
    }
  
    // Send the response back to the client as a JSON object
    header('Content-Type: application/json');
    echo json_encode($response);
  
  } else {
  
    // If the request was not made using the POST method, return an error message
    header('Content-Type: application/json');
    echo json_encode(array('status' => 'error', 'message' => 'Invalid request method.'));
  
  }
$data['email'] = $_POST['email'];
$data['password'] = $_POST['password'];
echo $email;
echo json_encode($data);
exit;
Prepare SQL query to check if user exists in database
$sql = "SELECT * FROM projectg WHERE username='$username' AND passwor='$password'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
  // User exists, set session variable and redirect to homepage
  $_SESSION['username'] = $username;
  header("Location: profile.html");
  exit();
} else {
  // User does not exist, display error message
  echo "Invalid username or password";
}
// Close connection
mysqli_close($conn);
?>