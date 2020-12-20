<?php
// header


 $uname = $_POST["uname"];
 $fname = $_POST["fname"];
 $lname = $_POST["lname"];
 $email = $_POST["email"];
 $pass = $_POST["pass"];
 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "startup";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user (uname, fname, lname, email, pass) VALUES ('$uname', '$fname', '$lname', '$email' , '$pass')";



//create post 

if($conn->query($sql)){
      header('Location: ..\view\loginPage.html');
}else{
    echo json_encode(
        array('message '=> 'post not created'));
}

