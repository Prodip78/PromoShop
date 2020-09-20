<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
<table>
	<tr>
		<td>Name</td>
		<td><input type="text" name="name"></td>
	</tr>

	<tr>
		<td>E-mail</td>
		<td><input type="email" name="email"></td>
	</tr>

	<tr>
		<td>Website</td>
		<td><input type="text" name="website"></td>
	</tr>

	<tr>
		<td>Comment</td>
		<td><textarea name="comment" rows="5" cols="40"></textarea></td>
	</tr>

	<tr>
		<td>Gender</td>
		<td>
			<input type="radio" name="gender" value="female">Female

			<input type="radio" name="gender" value="male">male
		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="submit"></td>
	</tr>

</table>
</form>

<?php
	$name =$email=$website=$comment=$gender="";
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$name   =validate($_POST["name"]);
	$email  =validate($_POST["email"]);
	$website=validate($_POST["website"]);
	$comment=validate($_POST["comment"]);
	$gender =validate($_POST["gender"]);

echo "Name:".$name."<br/>";
echo "E-mail:".$email."<br/>";
echo "Website:".$website."<br/>";
echo "Comment:".$comment."<br/>";
echo "Gender:".$gender;


}
function validate($data){

	$data=trim($data);
	$data=stripcslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}

?>

</body>
</html>