<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="post.php" method="post">
		New post: <input type="text" name="newPost" size="30">
		<input type="submit" value="Post">
	</form>

	<?php //to write all posts under the "post a new post"
		include("config.php");
		$sql="SELECT * FROM posts";
		$result= mysql_query($sql);
		if (mysql_num_rows($result)>0){
			while ($row= mysql_fetch_array($result)){
				$post= $row["post"];
				echo "<p>".$post."</p>";
				echo "<br>";
			}
		}
	?>
		<a href="updates.php">go back to updates page</a>
</body>
</html>