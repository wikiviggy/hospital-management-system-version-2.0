<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"rel="stylesheet"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"> </script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" > </script>
        <title>Registration system PHP and MySQL</title>
	
</head>
<body>
	
       <nav>
       <div class="nav-wrapper teal accent-4">
       <img src="https://upload.wikimedia.org/wikipedia/en/f/fe/Srmseal.png" style="width:50px; height:70 px;">
       </div>
       </nav> 
        <div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>NAME</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Registration number</label>
			<input type="text" name="regno" >
		</div>
		<div class="input-group">
			<label>Gender</label>
			<input type="text" name="regno" >
		</div>
		<div class="input-group">
			<label>DOB</label>
			<input type="text" name="regno" >
		</div>
		<div class="input-group">
			<label>Department </label>
			<input type="text" name="regno" >
		</div>
		<div class="input-group">
			<label>Campus</label>
			<input type="text" name="regno" >
		</div>
		
		<div class="input-group">
			<label></label>
			<input type="text" name="regno" >
		</div>
		<div class="input-group">
			<label>Campus</label>
			<input type="text" name="regno" >
		</div>
		<div class="input-group">
			<label>Campus</label>
			<input type="text" name="regno" >
		</div>
		
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>
