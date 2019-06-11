<html>
<?php 
session_start();
include("includes/db.php");

?>

<head>
  <meta charset="UTF-8">
  <title>Registration | BTP</title>
  
  
  
      <link rel="stylesheet" href="css/stylelog.css">

  
</head>

<body>
  <div class="wrapper">
	<div class="container">
		<h1>Welcome To Our Site</h1>
		
		<form action="user_register.php"class="form" method="post">
		    <input type="text" name="u_name" Placeholder="Enter Name"required/>
			<input type="text" name="u_email" placeholder="Enter Email" required/>
			<input type="password" name="u_pass" placeholder="Enter Password" required/>
			<input type="text" name="u_country" placeholder="Enter country" required/>
			<input type="text" name="u_city" placeholder="Enter city" required/>
            <input type="text" name="u_contact" placeholder="Enter contact no."required/>		
		<!--<input type="submit" name="login" value="Login" />-->
			<input type="file" name="u_image" required/>
			<button type="submit" name="register" id="login-button">Register Yourself</button>
		
			<h2><br><a href="user_login.php" style="color:white;">Already Registered? Login Here</br></a></h2>
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
	if(isset($_POST['register'])){
	
		
		$u_name = $_POST['u_name'];
		$u_email = $_POST['u_email'];
		$u_pass = $_POST['u_pass'];
		$u_country = $_POST['u_country'];
		$u_city = $_POST['u_city'];
		$u_contact = $_POST['u_contact'];
	    $u_image = $_FILES['u_image']['name'];           //for image we use the $_FILES
		$u_image_tmp = $_FILES['u_image']['tmp_name'];
		
		move_uploaded_file($u_image_tmp,"user/user_images/$u_image");
		
		 $insert_c = "insert into users (user_name,user_email,user_pass,user_country,user_city,user_contact,user_image) values ('$u_name','$u_email','$u_pass','$u_country','$u_city','$u_contact','$u_image')";
	
		$run_c = mysqli_query($con, $insert_c); 
		
		if(run_c)
		{
			//$_SESSION['user_email']=$u_email; 
		 echo "<script>alert('You Are Sucessfully Registered!')</script>";
         //echo "<script>window.open('user/my_account.php','_self')</script>";		 
		}
		
	}