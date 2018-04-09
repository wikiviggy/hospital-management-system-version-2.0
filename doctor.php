<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" > </script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.20/pdfmake.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.20/vfs_fonts.js'></script>
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

$sql="SELECT name,spc,time,days FROM doctor";
$result=mysqli_query($conn,$sql);
$i=0;
if(mysqli_num_rows($result) > 0) {
while($row=mysqli_fetch_assoc($result)){
$doctor_name[$i]=$row['name'];
$specialise[$i]=$row['spc'];
$timer[$i]=$row['time'];
$days_array[$i]=$row['days'];
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
<img src="http://images.all-free-download.com/images/graphiclarge/medical_background_doctor_icon_circle_design_6830322.jpg">
</div>
</div>
<div class="card">
<div class="card content">              
<table class="highlight">         
<thead>
          <tr>
              <th>Name</th>
              <th>Specialised at</th>
              <th>Available time</th>
              <th>Available days</th>
          </tr>
        </thead>
<?php
for($i=0;$i<count($doctor_name);$i++) {?>
        <tbody>
          <tr>
            <td><?php echo $doctor_name[$i] ;?></td>
            <td><?php echo $specialise[$i] ;?></td>
            <td><?php echo $timer[$i] ;?></td>
            <td><?php echo $days_array[$i] ;?></td>
          </tr>
        </tbody>
<?php } ?>      
</table>
</div>
</div>   
<button onclick="location.href = 'patient.php';" id="myButton" class="btn waves-effect waves-light" >Proceed to booking
<i class="material-icons right"></i>
</button>
<button class="btn waves-effect waves-light" type="submit" name="pdf" onclick="gen()" >print
<i class="material-icons right">send</i>
</button>
</div> 
<script>

function gen()
{ 
var docDefinition = {
  content: [
    {
      table: {
        // headers are automatically repeated if the table spans over multiple pages
        // you can declare how many rows should be treated as headers
        headerRows: 1,
        widths: [ '*', 'auto', 100, '*' ],

        body: [
          [ 'First', 'Second', 'Third', 'The last one' ],
          [ 'Value 1', 'Value 2', 'Value 3', 'Value 4' ],
          [ { text: 'Bold value', bold: true }, 'Val 2', 'Val 3', 'Val 4' ]
        ]
      }
    }
  ]
};
pdfMake.createPdf(docDefinition).download('Report.pdf');

}
</script>

</body>
</html>

