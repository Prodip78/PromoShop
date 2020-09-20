<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<?php
  if (isset($_FILES['image'])) {
  	$filename=$_FILES['image']['name'];
  	$filetmp=$_FILES['image']['tmp_name'];
  	move_uploaded_file($filetmp,"images/".$filename);
  	echo "Image uploaded successfully";
  }

	?>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="file" name="image">
		<input type="submit" value="submit">
	</form>

</body>
</html>