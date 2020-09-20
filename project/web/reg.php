<?php
include'config.php';


?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="web.css"></link>
	<h2 class="h" align="center">Wlcome To Registration</h2>
</head>
<body id="b">
	<div id="d">

		<form action="reg.php" method="POST" align="center">

		<center>
		<img src="register.png" class="img"></img></center>
			
			<label>Username</label>
			<input type="text" name="name" id="form" placeholder="Enter your Username">
			</b>
			
			
			<label>Email</label>
			<input type="email" name="email" id="form" placeholder="Enter your Email" >
			</b>
			<br>
			<b>
			<label>Password</label>
			<input type="password" name="pass" id="form" placeholder="Enter your Password" >
			</b>
			<br>
			<b>
			<label>Confirm-Password</label>
			<input type="password" name="cpass" id="form" placeholder="Enter your Confirm-Password" >
			</b>
			<input type="submit" name="reg" id="button" value="sign-up">
			<a href="login.php"><input type="button" name="back" id="button" value="Back To Log In">

		</form>
		<?php
		if (isset($_POST['reg'])) {
			$name=$_POST['name'];
			$email=$_POST['email'];
			$pass=$_POST['pass'];
			$cpass=$_POST['cpass'];
			if ($pass==$cpass) {
				$query=" select*from user where email='$email' ";
				$query_check=mysqli_query($con,$query);
				if ($query_check) {

					if (mysqli_num_rows($query_check)> 0) {
						echo "
						<script> 
						alert('Email already in use');
						window.location.href='login.php';

						</script>
						";
					}else{

					$insertion="insert into user values('$name','$email','$pass')";
					$run=mysqli_query($con,$insertion);
					if ($run) {
						echo "
						<script>
						alert('You are successfully register');
						window.location.href='home.php';

						</script>
						";
						
					}else{

						echo "
						<script>
						alert('Connection error!');
						window.location.href='reg.php';

						</script>
						";
					}

					}
				}else{

					echo "
						<script>
						alert('Database error');
						window.location.href='reg.php';

						</script>
						";
				}
				
			}else{

				echo "
						<script>
						alert('Password & cpass dose not match');
						window.location.href='reg.php';

						</script>
						";
			}
		}else{
			
		}


		?>
		
	</div>

</body>
</html>