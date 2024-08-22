<?php
// Database connection parameters
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$database = "art-js"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $username = $conn->real_escape_string($_POST['username']); // Corrected from $_POST['U-name']
    $email = $conn->real_escape_string($_POST['email']);
    $number = $conn->real_escape_string($_POST['number']);
    $password = $conn->real_escape_string($_POST['password']);
    $birthday = $conn->real_escape_string($_POST['birthday']);
    $gender = $conn->real_escape_string($_POST['Gender']);

    // SQL query to insert data
    $sql = "INSERT INTO `art-js` (`username`, `E-mail`, `Number`, `password`, `Date of Birth`, `Gender`) 
            VALUES ('$username', '$email', '$number', '$password', '$birthday', '$gender')";

    if ($conn->query($sql) === TRUE) {
        echo "Accout Successfully login complete";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection


$conn->close();
?>



<!DOCTYPE html>
<html>
<head>
    <title>Linking HTML Page in PHP</title>
    <style>
        body {
            background-image: url('bgimg.jpg');
            background-size: cover;
        }


.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #04AA6D;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}
a{
    text-decoration:none;
}
    </style>
</head>
<body>
    <h1><center><b><i><u>Click Here to view list</u></i></b></center></h1>
    <center><br>
    <button class="button"> <a href="list.html">BPI team ART-JS member list</a></button>
    </center>

</body>
</html>






