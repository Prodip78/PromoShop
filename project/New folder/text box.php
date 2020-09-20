<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
		<table>
			<tr>
				<td>Username:</td>
				<td>
					<input type="text" name="username" required="1">

				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="submit">
					<input type="reset" value="reset">
				</td>
			</tr>


		</table>

	</form>
<?php
if (isset($_POST ['username'])) {
	echo "Username is ".$_POST ['username'];
}
?>

</body>
</html>