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

			//načítani z darabázy
			$query = "select * from users where user_name = '$user_name' limit 1";

			$result = mysqli_query($con, $query);
			
			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php#");
						die;
					}
				}
			}
			echo '<script> alert("Zlé meno alebo heslo!")</script>';
		}else
		{
			echo '<script> alert("Zadal si nesprávne informácie!")</script>';
		}
	}
?>

<?php include('includes/header.php'); ?>
      <link rel="stylesheet" href="style-login.css"></link>
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
						<img src="img/login.svg" class="brand_logo" alt="Logo">
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
				 	<button type="submit" value="Login" name="button" class="btn login_btn">Login</button>
				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Ešte nemáš účet? <a href="signup.php" class="ml-2">Sign Up</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>