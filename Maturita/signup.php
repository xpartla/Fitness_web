<?php 
session_start();

	include("includes/connection.php");
	include("includes/functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo '<script> alert("Tvoje meno nesmie obsahovať čísla!")</script>';
		}
	}
?>


<?php include('includes/header.php'); ?>
      <link rel="stylesheet" href="signup-style.css"></link>
      <div>
        <video autoplay muted loop id="myVideo1">
            <source src="img/Video-login.mov" type="video/mp4">
          </video>
      </div>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="img/signup.svg" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form method="post">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<img class="img-fluid input-group-text " src="img/meno.svg" width="40px" height="40px">
							</div>
							<input type="text" name="user_name" autocomplete="off" class="form-control input_user" value="" placeholder="Meno">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<img class="img-fluid rounded mx-auto d-block input-group-text " src="img/heslo.svg" width="40px" height="40px">
							</div>
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="Heslo">
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" value="Signup" name="button" class="btn login_btn">Sign Up</button>
				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Už máš účet? <a href="login.php" class="ml-2">Log In</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>