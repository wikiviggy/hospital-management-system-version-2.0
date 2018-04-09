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
<h1> YOUR FEEDBACK IS VALUABLE TO US !! </h1>
<div class="card">
<div class="card-content">
<div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="enter patient id" id="id"type="text"class="validate">
          <label for="id"></label>
        </div>
</div>
  <div class="row">      
  <div class="input-field col s6">
          <input placeholder="enter your feedback" id="feedback" type="text" class="validate">
          <label for="feedback"></label>
        </div>
      </div> 
</div>  
<button class="btn waves-effect waves-light" type="submit" name="submit" onclick="submitfunc()">Submit
  <i class="material-icons right"></i>
  </button>  
<button onclick="location.href = 'parallax.php';" id="myButton" class="btn waves-effect waves-light" >Return home
<i class="material-icons right"></i>
</button>
</div>
  </div>
</div>
  </div>
</div>
<script>
              function submitfunc() {
                var id= $("#id").val();
                var feedback= $("#feedback").val();
                  var formdata= {
                       "id" : id,
                       "feedback" : feedback,
                         }
                $.ajax({
                    type: "POST",
                    url: "reply.php",
                    data: formdata,
                    success: function(data) {
                       alert('feedback submitted . Thank you');
                    }
                });
            }
</script>
</body>
</html>
