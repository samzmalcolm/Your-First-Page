<!DOCTYPE html>


<?php
session_start();
?>
<?php



$dsn = 'mysql:dbname=startup;host=127.0.0.1';
$user = 'root';
$password = '';
 $dbh = new PDO($dsn, $user, $password);
   $stmt = $dbh->prepare("SELECT * FROM mostused where uname=:username");


$username=$_SESSION['uname'];
$stmt-> bindparam(':username',$username);


    $stmt->execute();

  
  ?>
 



<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
 
  <meta charset="utf-8">
   <meta charset="utf-8">
    <link rel="icon" href="logo.png" type="image/gif" sizes="16x16">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Your Front Page</title>
  </head>
  <style media="screen">
   body {
	
	 background: url(image.jpg);
  background-repeat: no-repeat;
  background-size: 1440px 500px;
	
           background-color: white;
           font-family: 'Ubuntu', sans-serif;
		   margin-top:1%;
       }
	   
     #mostused{
		   background-color: lightgrey;
  width: 400px;
  border: 1px solid black;
  padding: 50px;
  margin: 40px;
  margin-left: 10%;
  height: 500px;
   overflow: auto;
   box-shadow: 5px 10px #888888;
		   }
		   
		   
		   table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
 
  text-align: left;
  padding: 8px;
}

tr {
  background-color: transparent;
}
		   
		   
		   
		   
		   
		   
		   
		    #history{
		   background-color: lightgrey;
  width: 400px;
  border: 1px solid black;
  padding: 50px;
  margin: 40px;
  height: 500px;
  margin-left: 10%;
   overflow: auto;
   box-shadow: 5px 10px #888888;
		   }
  
  
  
  .button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 2px 1px;
  cursor: pointer;
  margin-left: 120px;
 
}
  
  
  footer {
  text-align: center;
  padding: 3px;
  background-color: black;
  color: white;
}
  
  
  
  
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
  
   
.logo{
  text-align:center;
}
       .main {
         margin-top:10%;
         margin-bottom:5%;
           background-color: #FFFFFF;
           width: 400px;
           height: 530px;
           margin: 7em auto;
           border-radius: 1.5em;
           box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
       }

       .sign {
         margin-top:2%;
           padding-top: 40px;
           color: Black;
           font-family: 'Ubuntu', sans-serif;
           font-weight: bold;
           font-size: 23px;
       }
       
       
        .error {
        
         
           color: Blue;
           font-family: 'Ubuntu', sans-serif;
           text-align: center;
           font-size: 14px;
       }
       

       .un {
       width: 76%;
       color: black;
       font-weight: 700;
       font-size: 14px;
       letter-spacing: 1px;
       background: rgba(136, 126, 126, 0.04);
       padding: 10px 20px;
       border: none;
       border-radius: 20px;
       outline: none;
       box-sizing: border-box;
       border: 2px solid #4f4f4f;
       margin-bottom: 50px;
       margin-left: 46px;
       text-align: center;
       margin-bottom: 27px;
       font-family: 'Ubuntu', sans-serif;
       }

       form.form1 {
           padding-top: 20px;
       }

       .pass {
               width: 76%;
       color: black;
       font-weight: 700;
       font-size: 14px;
       letter-spacing: 1px;
       background: rgba(136, 126, 126, 0.04);
       padding: 10px 20px;
       border: none;
       border-radius: 20px;
       outline: none;
       box-sizing: border-box;
       border: 2px solid #4f4f4f;
     
       margin-left: 46px;
       text-align: center;
       margin-bottom: 5px;
       font-family: 'Ubuntu', sans-serif;
       }


       .un:focus, .pass:focus {
           border: 2px solid rgba(0, 0, 0, 0.18) !important;

       }

       .submit {
         cursor: pointer;
           border-radius: 5em;
           color: Black;
           background: blue;
           border: 2px solid black;
           padding-left: 40px;
           padding-right: 40px;
           padding-bottom: 10px;
           padding-top: 10px;
           font-family: 'Ubuntu', sans-serif;
           margin-left: 28%;
           margin-Bottom: 5%;
		   margin-top: 10%;
           font-size: 13px;
           box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
       }

       .forgot {
           text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
           color: #E1BEE7;
           padding-top: 15px;
       }

       a {
           text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
           color: #E1BEE7;
           text-decoration: none
       }

       @media (max-width: 600px) {
           .main {
               border-radius: 0px;
           }
		   
		   
		

  </style>
  <body>


<html>

<head>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Home</title>
</head>

<body>
<div class="topnav">
  <a class="active" href="#">Home</a>
  <a href="#">Contact</a>
  <a href="#">About</a>
   <a style="margin-right: 5%;" href="..\controller\logout.php">Logout</a>
</div>
 <br>
 &nbsp;&nbsp;&nbsp;<a href="#"><img src="logo.png" height="60px" width="120px" style="margin-left:30px;"><a>
  <p style="font-size:22px;color: White;"> Front Page of Internet </p>

 <canvas id="canvas" width="180" height="180"
style="background-color:transparent; margin-left: 43%;">
</canvas>
 <p id="date" style=" text-align: center;
  text-transform: uppercase; font-size:44px; margin-top: -5px;
  color: black;"></p>
 <br>
 <br>
 <br>

<div class="container">
 
  <div class="row">
  
  
  
  
    <div class="col-sm-6" id="mostused">
      
  
<img src="mr.png" height="50px" width="50px" style="margin-left:0px;">

<p style="font-size:22px;color: black;">Most Recent</p>
<br>

<table>
  <tr>
    <th></th>
    <th></th> 
  </tr>
 <?php 
 
 while($data= $stmt->fetch(PDO::FETCH_ASSOC)){?> 
			  
			  

  <tr>
   <form action="..\controller\delmostused.php" method="POST">
    <td>
			  <input type=hidden name="mid" value="<?php echo $data['id']?>">
	          <a href="<?php echo $data['url']?>" style="font-size: 22px; color: black;"><?php echo$data['name']?></a>  </td>
    <td><button style=" background-color: #4CAF50; color: black;" type="submit" value="Submit">Delete</button> </td>
	</form>
  </tr>
 <?php } ?>
</table>

			  
			  
			  
			  
			  
		



    </div>
	
	
	
	
	
	
	
	
    <div class="col-sm-6" id="history">
	 
  
<img src="hs.png" height="50px" width="50px" style="margin-left:0px;">

<p style="font-size:22px;color: black;">history </p>


<table>
  <tr>
    <th></th>
    <th></th> 
  </tr>
 <?php 
  $stmt = $dbh->prepare("SELECT * FROM history where uname=:username");

$stmt-> bindparam(':username',$username);


    $stmt->execute();

 
 while($data= $stmt->fetch(PDO::FETCH_ASSOC)){?> 
			  
			  

  <tr>
   <form action="..\controller\delhistory.php" method="POST">
    <td>
			  <input type=hidden name="mid" value="<?php echo $data['id']?>">
	          <a href="<?php echo $data['url']?>" style="font-size: 22px; color: black;"><?php echo$data['name']?></a>  </td>
    <td><button style=" background-color: #4CAF50; color: black;" type="submit" value="Submit">Delete</button> </td>
	</form>
  </tr>
 <?php } ?>
</table>

	



       </div>
  </div>
</div>
    

	 
	<div class="container">
 
  <div class="row">
  
  
  
  
    <div class="col-sm-6" >
      
  <a href="addmostused.html" style="margin-top:-10px; margin-left: 45%;" class="button">Add</a>

    </div>
	
	
    <div class="col-sm-6"">
	 
   <a href="addhistory.html" style="margin-top:-10px; margin-left: 45%;" class="button">Add</a>
      



       </div>
  </div>
</div>
	
	
	
	<br>
<br>	

<div class="container">
 
  <div class="row">
    <div class="col-sm-6" id="mostused">
      
  
<img src="bm.png" height="50px" width="50px" style="margin-left:0px;">

<p style="font-size:22px;color: black;">Bookmarks</p>



<table>
  <tr>
    <th></th>
    <th></th> 
  </tr>
 <?php 
  $stmt = $dbh->prepare("SELECT * FROM bookmark where uname=:username");

$stmt-> bindparam(':username',$username);


    $stmt->execute();

 
 while($data= $stmt->fetch(PDO::FETCH_ASSOC)){?> 
			  
			  

  <tr>
   <form action="..\controller\delbookmark.php" method="POST">
    <td>
			  <input type=hidden name="mid" value="<?php echo $data['id']?>">
	          <a href="<?php echo $data['url']?>" style="font-size: 22px; color: black;"><?php echo$data['name']?></a>  </td>
    <td><button style=" background-color: #4CAF50; color: black;" type="submit" value="Submit">Delete</button> </td>
	</form>
  </tr>
 <?php } ?>
</table>

	





    </div>
    <div class="col-sm-6" id="history">
	 
  
<img src="rm.png" height="50px" width="50px" style="margin-left:0px;">

<p style="font-size:22px;color: black;">Recommanded </p>



<table>
  <tr>
    <th></th>
    <th></th> 
  </tr>
 <?php 
  $stmt = $dbh->prepare("SELECT * FROM recommanded where uname=:username");

$stmt-> bindparam(':username',$username);


    $stmt->execute();

 
 while($data= $stmt->fetch(PDO::FETCH_ASSOC)){?> 
			  
			  

  <tr>
   <form action="..\controller\delrecommand.php" method="POST">
    <td>
			  <input type=hidden name="mid" value="<?php echo $data['id']?>">
	          <a href="<?php echo $data['url']?>" style="font-size: 22px; color: black;"><?php echo$data['name']?></a>  </td>
    <td><button style=" background-color: #4CAF50; color: black;" type="submit" value="Submit">Delete</button> </td>
	</form>
  </tr>
 <?php } ?>
</table>

	




       </div>
  </div>
</div>
 
	<div class="container">
 
  <div class="row">
  
  
  
  
    <div class="col-sm-6" >
      
  <a href="addbookmark.html" style="margin-top:-10px; margin-left: 45%;" class="button">Add</a>

    </div>
	
	
	
	
	
	
	
	
    <div class="col-sm-6"">
	 
  
<a href="addrecommanded.html" style="margin-top:-10px; margin-left: 45%;" class="button">Add</a>



       </div>
  </div>
</div>
	

<br>


<br>
<br>

<footer>
<br>
  <p>Front Page of your Internet<br>
 </p>
  <br>
</footer>


 
<script>
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var radius = canvas.height / 2;
ctx.translate(radius, radius);
radius = radius * 0.90
setInterval(drawClock, 1000);

function drawClock() {
  drawFace(ctx, radius);
  drawNumbers(ctx, radius);
  drawTime(ctx, radius);
}

function drawFace(ctx, radius) {
  var grad;
  ctx.beginPath();
  ctx.arc(0, 0, radius, 0, 2*Math.PI);
  ctx.fillStyle = 'white';
  ctx.fill();
  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
  grad.addColorStop(0, '#333');
  grad.addColorStop(0.5, 'white');
  grad.addColorStop(1, '#333');
  ctx.strokeStyle = grad;
  ctx.lineWidth = radius*0.1;
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
  ctx.fillStyle = '#333';
  ctx.fill();
}

function drawNumbers(ctx, radius) {
  var ang;
  var num;
  ctx.font = radius*0.15 + "px arial";
  ctx.textBaseline="middle";
  ctx.textAlign="center";
  for(num = 1; num < 13; num++){
    ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
  }
}

function drawTime(ctx, radius){
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}
</script>

<script>
var d = new Date();
document.getElementById("date").innerHTML = d.toDateString();
</script>

  </body>
</html>
