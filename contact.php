<!DOCTYPE html>
<html>

<head>
 	<title>Contact</title>
 	<link href="css/stylesheet.css" rel="stylesheet">
 	
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	
	<!--Calling JavaScript slideshow -->
	<script type="text/javascript" src="slider.js"></script>
	
	<!-- Form code -->
	<link rel="stylesheet" href="js/jquery-ui.css" />
	<script src="js/jquery-1.8.3.js"></script>
	<script src="js/jquery-ui.js"></script>

	
	<!-- validation -->
	<script language="javascript" src="js/jquery.validation.js"></script>	
	
   <!-- Add icon library -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
 	<div class="nav">
	    <p id="NameHeader" style="font-size:25px;">Keoabetswe <strong>Nthite</strong></p>

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
	
	<!-- Content row -->
	<br/><!-- break -->

	<div class="row" id="content">            	 
		<div id="maincontent" class="col-md-8">
			
		<center><h1>Contact</h1></center>
		
		
			<center><p>Please submit your enquiry using the form below or email me at info@keonthite.co.za</p></center>
			
					
			<form action="user_process.php" method="post" id="myform"> 
			    <center><div class="form-group required-field">
					<p>Name</p>
					<input type="text" class="form-control" id="name" placeholder="" name="name">
				</div>

				<div class="form-group required-field">
					<p>Email</p>
					<input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="form-control" id="email" placeholder="" name="email">
				</div>
				
				<div class="form-group required-field">
					<p>Message</p>
					<textarea class="form-control" rows="3" placeholder="" id="message" name="message"></textarea>
				</div>
  				<div class="form-group">
					<input name="form-submit" type="submit" value="Submit" class="btn btn-primary submit" />
				</div></center>
					
			</form>
		</div>
	
	<!-- break -->
	<br/><br/><br/><br/><br/>
	
	<!-- footer -->
	<div class="row">
		<div id="footer" class="col-lg-12">
			<center><a href="https:facebook.com/KeoabetsweNthite" class="fa fa-facebook" title="Facebook" target="_blank"></a> 
				<a href="https:instagram.com/keo_q" class="fa fa-instagram" title="Instagram" target="_blank"></a> 
				<a href="https://www.linkedin.com/in/keoabetswe-nthite-a4a6b3ab/" class="fa fa-linkedin" title="LinkedIn" target="_blank"></a> 
				<a href="https://github.com/Keoabetswe" class="fa fa-github" title="Github" target="_blank"></a> 				
				<a href="contact.php" class="fa fa-envelope" title="Email" target="_blank"></a></center>
			
		</div>
	</div>

	<!-- closes content tag  -->
	</div>
</body>

</html>
