<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<h1>[NAME OF EVENT]</h1>
	<h2>by [name of coordinator/commitee]</h2>
	<ul> 
 		<li><a href="index.html" class="button navigation">Welcome</a></li>
  		<li><a href="updates.php" id="currentPage" class="button navigation">UPDATES</a></li>
  		<li><a href="give.html" class="button navigation" >GIVE</a></li>
	</ul>
	<?php
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

<a href="adminlogin.html">admin</a>


</body>
</html>