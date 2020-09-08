<?php 	
$db_host="us-cdbr-east-02.cleardb.com";	
$db_username="bd1f066e6f1964";	
$db_password="108a612f";	
$db_name="heroku_ad3b847ae807a1b";

$db_connect = mysqli_connect($db_host, $db_username, $db_password, $db_name);	

	//check connection
	if(mysqli_connect_error())
	{
		echo "<h3>Failed to connect to mySQL: </h3>" .mysqli_connect_error();
		//	echo '<script>alert("Congrats '.$username.' \n You have successfully created an Account:)")</script>';
		//	echo '<script>window.location="index.php"</script>';
	}
	else
	{
		echo "<h3>Connected!</h3>"; //comment out row when it connects
		//echo '<script>alert("Database Connected!")</script>';
	}		
?> 


