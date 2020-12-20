<?php

$dsn = 'mysql:dbname=startup;host=127.0.0.1';
$user = 'root';
$password = '';


$myusername = isset($_POST['uname']) ? $_POST['uname'] : '';
  $mypassword = isset($_POST['pwd']) ? $_POST['pwd'] : '';




     $dbh = new PDO($dsn, $user, $password);
     $stmt = $dbh->prepare("SELECT * FROM user WHERE uname = '$myusername' and pass = '$mypassword'");


     $stmt->execute();
     $row = $stmt->fetch();
	
     
 
	 
            if($row){

               session_start();
                 
				 $_SESSION['uname'] = $row["uname"];
                 $_SESSION['fname'] = $row["fname"];
                 $_SESSION['lname'] = $row["lname"];
 
        
						  
             header('Location: ..\view\home.php');
			 


             }else{
				header('Location: ..\view\loginPage2.html');
				 
			 }
			 
			 
			
			  

?>
