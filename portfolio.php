﻿<?php
session_start();

// connects to the database
$db_host="192.168.110.19";	
$db_username="keontuzb_keo";	
$db_password="Mm@mpeta1";	
$db_name="keontuzb_website";

$db_connect = mysqli_connect($db_host, $db_username, $db_password, $db_name);	
?>


<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio</title>
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    
  <!-- css -->
	<link href="css/stylesheet.css" rel="stylesheet">
	<link rel="stylesheet" href="css/c12.css" />
  
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
	<div id="content">           
		<div id="maincontent">
	
			
		<h2 id="contentHeader">Portfolio</h2>
			
		<?php 
				$items_query = "SELECT * FROM projects order by project_id ASC";
				$items_result = mysqli_query($db_connect, $items_query);
				
				if(mysqli_num_rows ($items_result) > 0)
				{
					while($row = mysqli_fetch_array($items_result))
					{
								
				?>
				
				<div class="repo-project">
					<form  method="post" action="portfolio.php?action=add&id=<?php echo $row["project_id"];?>">
						<div style="border:1px solid #333; background-color:lightgrey; border-radius:5px; padding:5px; width:300px;">
							<img src="images/<?php echo $row["project_image"]; ?>" class="img-responsive" height="150px" width="300px"/><br />
	
							<h4 class="text-danger"><?php echo $row["project_name"]; ?></h4>
							<h4 class="text-info"><?php echo $row["project_desc"];?></h4>
	
							<center><a href="<?php echo $row["github_link"];?>" ><input type="submit" name="" style="margin-top:5px;" class="btn btn-success" value="Github View"/></a>
							<input type="submit" name="" style="margin-top:5px;" class="btn btn-success" value="Live View" src="<?php echo $row["live_link"];?>" /></center>
						</div>
				</form>
				
				<br/><!-- break -->
				

				</div>	
				<?php
					}
				}
				?>

		<!-- closes maincontent -->			
		</div>

		<!-- footer -->
		<div id="footer" class="col-lg-12">
			<small>
				<center><a href="https:facebook.com/KeoabetsweNthite" class="fa fa-facebook" title="Facebook" target="_blank"></a> 
				<a href="https:instagram.com/keo_q" class="fa fa-instagram" title="Instagram" target="_blank"></a> 
				<a href="https://www.linkedin.com/in/keoabetswe-nthite-a4a6b3ab/" class="fa fa-linkedin" title="LinkedIn" target="_blank"></a> 
				<a href="https://github.com/Keoabetswe" class="fa fa-github" title="Github" target="_blank"></a> 
				<a href="https://medium.com/@keonthite" class="fa fa-medium" title="Medium" target="_blank"></a> 
				<a href="contact.php" class="fa fa-envelope" title="Email"></a></center>
			</small>
		</div>

	<!-- closes content -->
	</div>
</body>
</html>
