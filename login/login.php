<?php
include 'header2.php';
 include('functions.php') ?>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
	
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link type="text/css" rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

	<div class="container-fluid" style="background-image: url(../img/signupback.jpg); background-repeat: no-repeat; background-position: center;">
 	<div class="container">
 		<div class="row">
 			<div class="col-sm-6">
 			<h1 class="signuptext" style="font-size: 280%;padding-top: 100px; text-align: center;color:#fff; 
    font-family: Georgia, serif; letter-spacing: 0.05em;">Welcome to Ma-gar.com</h1><br><br>
 			<h4 class="signuptext" color:#ffffff; font-family: Courier New, Courier, monospace;">Get connected with Magar culture, customes, Mothertongue and many more.</h4>
 			</div>
 			<div style="padding-top: 60px; margin-bottom: 50px; margin-top: 10px;" class="col-sm-4">
 			<div class= "w3-card-12 w3-round-large w3-white">
 				
 				<div style="padding:20px;">
 			<p><h3>Login</h3><h7 style="color: red; padding: 15px;">*User</h7></p>
 					<form action="login.php" method="POST" >
 						<p style="color: red;"><?php echo display_error();?></p>
<input type="text" name="username" placeholder="USERNAME" size="30" required value="" /><br><br>
<input type="password" name="password" placeholder="PASSWORD" size="30" required value="" /><br><br>
<input type="submit" class="btn" name="login_btn" name="submit" value="Log In" />
</form>
<form action="signup.php" method="POST">
	<p style="padding-top: 10px;">
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
<p style="padding-top: 30px;"><h3>Login</h3><h7 style="color: red; padding: 15px;">*Administration</h7></p>

<input type="text" name="admin" placeholder="USERNAME" size="30" required value=""><br><br>
<input type="password" name="apassword" placeholder="PASSWORD" size="30" required /><br><br>
<input type="submit" name="login_btn" class="btn" value="Admin" />
</form>
</div>

 			</div>
 			</div>
 		</div>
 	</div>
</div>


	<!--
	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>

-->
<style>
	h4.signuptext{
	font-size: 25px;
      line-height: 1.5em;
      color: #dddddd;
      font-weight: 300;
      margin-bottom: 30px;
      padding: 20px 80px;
      text-align: center;
      text-align: justify;

}
</style>

</body>
</html>
<?php
include '../footer.html';
?>