<?php


 $id = $_POST["mid"];

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

$sql = "DELETE FROM mostused WHERE id='$id'";



//create post 

if($conn->query($sql)){
      header('Location: ..\view\home.php');
}else{
    echo json_encode(
        array('message '=> 'post not created'));
}

