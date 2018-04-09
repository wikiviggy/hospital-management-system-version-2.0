<!doctype html>
<html>
<head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" > </script>

</head>
<body>
<div class="container">
<nav>
<div class="navbar-wrapper ">
<img src="https://upload.wikimedia.org/wikipedia/en/thumb/2/24/Apollo_Hospitals_Svg_Logo.svg/220px-Apollo_Hospitals_Svg_Logo.svg.png" style="width:70px; height:80 px;">
<h1>Apollo</h1>
</div>
</nav>
<div class="card">
<div class="card-content">
<div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="enter name" id="name"type="text"class="validate">
          <label for="name"></label>
        </div>
</div>
  <div class="row">      
  <div class="input-field col s6">
          <input placeholder="enter age" id="age" type="text" class="validate">
          <label for="age"></label>
        </div>
      </div> 

<div class="row">      
  <div class="input-field col s6">
          <input placeholder="enter contact number" id="number" type="text" class="validate">
          <label for="number"></label>
        </div>
      </div>
<div class="row">      
  <div class="input-field col s6">
          <input placeholder="enter problem" id="problem" type="text" class="validate">
          <label for="problem"></label>
        </div>
      </div>
<div class="row">      
  <div class="input-field col s6">
          <input placeholder="enter email" id="email" type="text" class="validate">
          <label for="email"></label>
        </div>
      </div>
</div>  
<button class="btn waves-effect waves-light" type="submit" name="submit" onclick="submitfunc()">Submit
  <i class="material-icons right">send</i>
  </button>  
<button onclick="location.href = 'appointment_order.php';" id="myButton" class="btn waves-effect waves-light" >Check your appointment order
<i class="material-icons right"></i>
</button>
</div>
  </div>
</div>
  </div>
</div>
<script>
              function submitfunc() {
                var name= $("#name").val();
                var age= $("#age").val();
                var number= $("#number").val();
                var problem= $("#problem").val();
                var email= $("#email").val();
                
                  var formdata= {
                       "name" : name,
                       "age" : age,
                       "number" : number,
                       "problem" : problem,
                       "email" : email,
                       
                         }
                $.ajax({
                    type: "POST",
                    url: "appoint.php",
                    data: formdata,
                    success: function(data) {
                       alert('appointment booked successfully');
                    }
                });
            }
</script>
</body>
</html>
