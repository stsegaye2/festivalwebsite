<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include("config.php"); 
		$newPost= $_POST["newPost"]; //adding new post in the sql table
		$sql="INSERT INTO posts SET post = '$newPost'";
		$result= mysql_query($sql);


		header('Location: admin.php');
		exit;
		
	?>

</body>
</html>