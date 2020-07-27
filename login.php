<?php
session_start();


?>

<html>
 <head>
	<title>Login</title>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
	<link rel="icon" href="images/code.ico">	

  	<!-- css -->
	<link href="css/stylesheet.css" rel="stylesheet">
  
  	<!-- Add icon library -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 

</head>

<body>
	<!-- nav bar -->
	<div class="nav">
		<p id="website-name">Keoabetswe <strong>Nthite</strong></p>

	    <label for="toggle">&#9776;</label>
	    <input type="checkbox" id="toggle"/>
	            
	    <div class="menu">
   			<a href="index.html">Home</a>
	        <a href="about.html">About</a>
   	        <a href="blog.php">Blog</a>
	        <a href="portfolio.php">Portfolio</a>
   	        <a href="contact.php">Contact</a>
	    </div>
	    <br/>
	</div>

		<div id="container">
			<h2 id="body-title">Login</h1>
			
			<form method="post" action="user_process.php">
				<center>
					<div class="input-login">
						<input type="text" placeholder="Username" name="username" required="required">   
					</div>
					
					<div class="input-login">
						<input type="password" placeholder="Password" name="pass" required="required">
					</div> 
						
					<div class="input-login">
						<input type="submit" class="btn btn-form submit" name="btnLogin" value="Login"/>
					</div>
				</center>
			</form>					
		</div>
</body>
</html>