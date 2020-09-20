<?php
include'config.php';


?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="web.css"></link>
	<h2 class="h" align="center"><span style="color:yellow;">Wlcome To Login</span></h2>
</head>
<body id="b">
	<div id="d">
		
			<form action="login.php" method="POST" align="right">
			
		<center>	
		<img src="login-system-icon-13.png" class="img"></img></center>
		<br>	
		
			<label><span style="color:red;">Email</span></label>
	
			<br><br>
		
			<label>Password</label>
			<input type="password" name="pass" id="form" placeholder="Enter your Password">
			<br>
			<input type="submit" name="login" id="button" value="Log-In">
			<a href="reg.php"><input type="button" name="reg" id="button" value="Registration">

				
			



		</form>
		<?php
		if (isset($_POST['login'])) {
			$email=$_POST['email'];
			$pass=$_POST['pass'];

			$query=" select*from user where email='$email' AND pass='$pass'";
			$check=mysqli_query($con,$query);
			if ($check) {
				if (mysqli_num_rows($check)> 0) {
					echo "
						<script> 
						alert('You are successfully Logged in');
						window.location.href='home.php';

						</script>
						";
				}else{
					echo "
						<script> 
						alert('Email or password not correct');
						window.location.href='login.php';

						</script>
						";
					
				}
			}else{

				echo "
						<script> 
						alert('Database error');
						window.location.href='login.php';

						</script>
						"; 	  	
			}
			
		}else{

			
		}



		?>
		


	</div>

</body>
</html>