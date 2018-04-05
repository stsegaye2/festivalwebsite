<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include("config.php");
		$username= $_POST["username"];
		$pwdentered= $_POST["password"];
		if ($username=== '' || $pwdentered === ''){
			header('Location: adminlogin.html');
			exit;
		}
		else{
			//goes into else statement fine
			$sql="SELECT * FROM user WHERE username = '$username'";
		$result= mysql_query($sql);
		if (mysql_num_rows($result)>0){ //if there are rows (not empty)
			$temp = 0;
			while ($row= mysql_fetch_array($result)){
				$pwd= $row["password"];
				if ($pwd === $pwdentered){
					session_start();
					$_session['un']=$username;
					header('location: admin.php');
					$temp = 1;
				}
			}
			if ($temp === 0){
				header('Location: adminlogin.html');
				exit;
			}
		}
		else {
				header('Location: adminlogin.html');
				exit;
				}
	}
	?>
</body>
</html>