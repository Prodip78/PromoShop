<?php

$errname=$erremail=$errwebsite=$errgender="";

	$name =$email=$website=$comment=$gender="";
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	if (empty($_POST["name"])) {
		$errname=" <span style='color:red'>Name is Required.</span>";
	}else{
	$name   =validate($_POST["name"]);
   }
   if (empty($_POST["email"])) {
   	 $erremail="<span style='color:red'>E-mail is Required.</span>";
   }else{
	$email  =validate($_POST["email"]);
	}
	if (empty($_POST["website"])) {
		$errwebsite="<span style='color:red'>Website is Required. </span>";
	}else{
	$website=validate($_POST["website"]);
   }
   if (empty($_POST["gender"])) {
   	$errgender="<span style='color:red'>Gender is Required.</span>";
   }else{
   	$gender =validate($_POST["gender"]);
   }
	$comment=validate($_POST["comment"]);
	



}
function validate($data){

	$data=trim($data);
	$data=stripcslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
<table>
	<p style="color: red">* Required field</p>
	<tr>
		<td>Name</td>
		<td><input type="text" name="name">*<?php echo $errname?></td>
	</tr>

	<tr>
		<td>E-mail</td>
		<td><input type="email" name="email">*<?php echo $erremail?></td>
	</tr>

	<tr>
		<td>Website</td>
		<td><input type="text" name="website">*<?php echo $errwebsite?></td>
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
			*<?php echo $errgender?>
		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="submit"></td>
	</tr>

</table>
</form>

</body>
</html>