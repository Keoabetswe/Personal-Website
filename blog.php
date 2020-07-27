<?php

?>

<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog</title>
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  <link rel="icon" href="images/code.ico">	
  
  <!-- css -->
	<link href="css/stylesheet.css" rel="stylesheet">
  
  	<!--Calling JavaScript slideshow -->
	<script type="text/javascript" src="js/slider.js"></script>

  
  <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
	<div class="nav">
	    <p id="website-name">Keoabetswe <strong>Nthite</strong></p>

	    <label for="toggle">&#9776;</label>
	    <input type="checkbox" id="toggle"/>
	            
	    <div class="menu">
		    <a href="index.html">Home</a>
			<a href="about.html">About</a>
			<a href="documents/K Nthite CV.pdf" target="_blank">CV</a>
   	        <a href="blog.php">Blog</a>
	        <a href="portfolio.php">Portfolio</a>
   	        <a href="contact.php">Contact</a>
	    </div>
	    
	</div>


	<!--  break -->
	<br/>

	<!-- main content-->
	<div id="container">            
		<h2 id="body-title">Blog</h2>
		   
		<!-- break -->
		<br/>

		<!-- retrieves blogs from medium -->
		<div id="retainable-rss-embed"
			data-rss="https://medium.com/feed/@keonthite"
			data-maxcols="3" 
			data-layout="grid"
			data-poststyle="inline"
			data-readmore="Read More"
			data-buttonclass="btn btn-primary"
			data-offset="-100">
		</div>	

		<!-- footer -->
		<div id="footer" class="col-lg-12">
			<center>
				<a href="https://www.linkedin.com/in/keoabetswe-nthite-a4a6b3ab/" class="fa fa-linkedin" title="LinkedIn" target="_blank"></a> 
				<a href="https://github.com/Keoabetswe" class="fa fa-github" title="Github" target="_blank"></a> 
				<a href="https://medium.com/@keonthite" class="fa fa-medium" title="Medium" target="_blank"></a> 
				<a href="contact.php" class="fa fa-envelope" title="Email"></a>
			</center>
		</div>
	</div>	

	<!-- embeds medium posts -->
	<script src="https://www.retainable.io/assets/retainable/rss-embed/retainable-rss-embed.js"></script>
</body>
</html>
