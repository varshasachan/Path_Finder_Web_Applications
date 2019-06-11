<html>
<?php 
session_start();
include("includes/db.php");

?>

<head>
  <meta charset="UTF-8">
  <title>Login | BTP</title>
  
  
  
      <link rel="stylesheet" href="css/stylelog.css">

  
</head>

<body>
  <div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>
		
		<form action="" class="form" method="post">
			<input type="text" name="email" placeholder="Enter Email" required/>
			<input type="password" name="pass" placeholder="Enter Password" required/>
			<!--<input type="submit" name="login" value="Login" />-->
			<button type="submit" name="login" id="login-button">Login</button>
		
			<h2><br><a href="user_register.php" style="color:white;">New To Site? Register Here</br></a></h2>
		</form>
		
		
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <!--<script src="js/index.js"></script>-->

</body>
</html>


	<?php 
	if(isset($_POST['login'])){
	
		$u_email = $_POST['email'];
		$u_pass = $_POST['pass'];
		
		$sel_c = "select * from users where user_pass='$u_pass' AND user_email='$u_email'";
		
		$run_c = mysqli_query($con, $sel_c);
		
		$check_user = mysqli_num_rows($run_c); 
		
		if($check_user==0){
		
		echo "<script>alert('Password or email is incorrect, plz try again!')</script>";
		exit();
		}
		
		if($check_user>0){
		
		$_SESSION['user_email']=$u_email; 
		
		echo "<script>alert('You logged in successfully, Thanks!')</script>";
		echo "<script>window.open('user/my_account.php','_self')</script>";
		
		}
		
	}
	
	
	?>