<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    
  <!-- css -->
	<link href="css/stylesheet.css" rel="stylesheet">
  
  	<!--Calling JavaScript slideshow -->
	<script type="text/javascript" src="js/slider.js"></script>

  
  <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
	<div class="nav">
	    <p id="nameHeader">Keoabetswe <strong>Nthite</strong></p>

	    <label for="toggle">&#9776;</label>
	    <input type="checkbox" id="toggle"/>
	            
	    <div class="menu">
		    <a href="index.html">Home</a>
	        <a href="about.html">About</a>
   	        <a href="blog.php">Blog</a>
	        <a href="portfolio.php">Portfolio</a>
   	        <a href="contact.php">Contact</a>
	    </div>
	</div>


	<!--  break -->
	<br/>

	<!-- main content-->
	<div class="row" id="content">           
		<div id="maincontent">
		
		<h2 id="contentHeader">Contact</h2>

		<center><p id="contentBody">Get in touch via the form below or email me at <a style="color:white;">KeoNthite@gmail.com</a></p></center>

		<!-- break -->
		<br/>

		<!-- Login Form -->		
		<form method="post" action="user_process.php">
			<center>
			<div class="input-contact">
				<input type="text" placeholder="Name" name="name" required="required">
			</div>
				  
			<div class="input-contact">
				<input type="text" placeholder="Email" name="email" required="required">
			</div>
				  	
			<div class="input-contact">
			  <textarea cols="3" rows="3" placeholder="Message" name="message" required="required"></textarea>
			</div>
				
			<div class="input-contact">
				<input type="submit" class="btn btn-contact submit" name="contact" value="Submit"/>
			</center>
		</form>				
					
		<!-- maincontent -->	
		</div>

		<br/><br/><br/>
	<!-- closes content -->
	</div>

</body>
</html>
