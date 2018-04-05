<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$host= "localhost";
		$username= "stsegaye2";
		$pwd="stsegaye2";
		$db_name="stsegaye2";
		$conn = mysql_connect("$host", "$username", "$pwd");
		if (!$conn){
			die("cannot connect to server");
		}
		else{
			mysql_select_db("$db_name");
			echo "connection established";
		}
	?>
</body>
</html>