<!DOCTYPE html>
<html>
<head>
<title>Contact Us</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" > </script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
$servername = "localhost";
    $username = "root";
    $password = "mysql123";
    $dbname = "hospital";
    $array=[];
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $sql="SELECT contact_name FROM contact";
    $result=mysqli_query($conn,$sql); 
    $i=0;
    if(mysqli_num_rows($result) > 0) {
    while($row=mysqli_fetch_assoc($result)){
    $array[$i]=$row['contact_name'];
    $i++;
       }
    }
   else {
    echo "0 results";
   }
?>
</head>
<body background="https://ak3.picdn.net/shutterstock/videos/9513653/thumb/2.jpg">
<div class="container">
<nav>
       <div class="navbar-wrapper pink">
       <img src="https://upload.wikimedia.org/wikipedia/en/thumb/2/24/Apollo_Hospitals_Svg_Logo.svg/220px-Apollo_Hospitals_Svg_Logo.svg.png" style="width:70px; height:80 px;">
       <a href="parallax.php">Home</a>
       </div>
     </nav>
     <br>
           <div class="card-panel teal lighten-2">
           <div class="card container">          
<button onclick="location.href = '<?php echo $array[0]; ?>';" style="font-size:50px;background-color:blue">Like us on facebook <i class="fa fa-facebook-square"></i></button>
<br>
</div>
<div class="card container">  
<button onclick="location.href = '<?php echo $array[1]; ?>';"style="font-size:50px;background-color:#40e0d0">follow us on twitter<i class="fa fa-twitter-square"></i></button>
<br>
</div>
<div class="card container">           
<button onclick="location.href = '<?php echo $array[2]; ?>';"style="font-size:50px;background-color:pink">clone on github <i class="fa fa-github"></i></button>
<br>
</div>
<div class="card container">           
<button onclick="location.href = '<?php echo $array[3]; ?>';"style="font-size:50px;background-color:blue">connect on linkedin <i class="fa fa-linkedin-square"></i></button>
<br>
</div>
</div>
</div>
</body>
</html>

