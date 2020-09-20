<?php
include'config.php';


?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="web.css"></link>
	<h2 class="h" align="center">Wlcome To Home</h2>
</head>
<body id="b">
	<div id="d">
		
			<form action="home.php" method="POST" align="center">
			<br>
		<center>	
		<img src="beautiful-exterior-newly-built-luxury-260nw-529108441.jpg" class="img"></img></center>
		<br>	
		
			
			<input type="submit" name="logout" id="button" value="Log-Out">

				
			



		</form>
		<?php
		if (isset($_POST['logout'])) {
			  	echo "
						<script> 
						alert('You are successfully Logged out');
						window.location.href='login.php';

						</script>
						";
		}else{

		}


		?>


	</div>

</body>
</html>