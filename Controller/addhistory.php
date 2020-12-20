<?php
// header

session_start();

 $name = $_POST["name"];
 $url = $_POST["url"];

 $uname = $_SESSION['uname'];

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

$sql = "INSERT INTO history (name, url, uname) VALUES ('$name', '$url','$uname')";



//create post 

if($conn->query($sql)){
      header('Location: ..\view\home.php');
}else{
    echo json_encode(
        array('message '=> 'post not created'));
}

