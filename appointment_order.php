<!DOCTYPE HTML>
<html>
<head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" > </script>
<?php
$servername='localhost';
$username='root';
$password='mysql123';
$dbname='hospital';
$doctor_name= [];
$specialise= [];
$timer= [];
$days_array= [];
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die("connection failed :" . $conn->connect_error);
}

$sql="SELECT patient_id,name,age,email FROM patient";
$result=mysqli_query($conn,$sql);
$i=0;
if(mysqli_num_rows($result) > 0) {
while($row=mysqli_fetch_assoc($result)){
$patient_id[$i]=$row['patient_id'];
$name[$i]=$row['name'];
$age[$i]=$row['age'];
$email[$i]=$row['email'];
$i++;
}
}
else {
echo "0 results";
}
$conn->close();
?>
</head>
<body>
<nav>
<div class="navbar-wrapper ">
<img src="https://upload.wikimedia.org/wikipedia/en/thumb/2/24/Apollo_Hospitals_Svg_Logo.svg/220px-Apollo_Hospitals_Svg_Logo.svg.png" style="width:70px; height:80 px;">
</nav>
<div class="container">
<div class="card-panel">
<div class="card-image">
<img src="http://www.ucdenver.edu/academics/colleges/medicalschool/departments/Neurosurgery/patientcare/PublishingImages/Appointment_Time_253097.jpg">
</div>
</div>
<div class="card">
<div class="card content">              
<table class="highlight">         
<thead>
          <tr>
              <th>Appointment number</th>
              <th>Name</th>
              <th>Age</th>
              <th>Email-id</th>
              <th>Option to cancel</th>  
        </tr>
        </thead>
<?php
for($i=0;$i<count($patient_id);$i++) {?>
        <tbody>
          <tr>
            <td><?php echo $patient_id[$i] ;?></td>
            <td><?php echo $name[$i] ;?></td>
            <td><?php echo $age[$i] ;?></td>
            <td><?php echo $email[$i] ;?></td>
            <td> <button onclick="location.href = 'cancel.php';" id="myButton" class="btn waves-effect waves-light" >Cancel appointment
                 <i class="material-icons right"></i>
                 </button>
            </td>  
        </tr>
        </tbody>
<?php } ?>      
</table>
</div>
</div>   
<button onclick="location.href = 'parallax.php';" id="myButton" class="btn waves-effect waves-light" >Return to Home
<i class="material-icons right"></i>
</button>
</div> 
</body>
</html>

