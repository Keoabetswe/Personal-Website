<?php
session_start();
$db_host="us-cdbr-east-02.cleardb.com";	
$db_username="bd1f066e6f1964";	
$db_password="108a612f";	
$db_name="heroku_ad3b847ae807a1b";


if (isset($_GET['logout'])) 
{
	session_destroy();
  	unset($_SESSION['username']);
 	header("location: index.php");
}

if(isset($_GET["id"]))
{
	$query = "SELECT * FROM projects WHERE project_id = ".$_GET['id'];
	$result = mysqli_query($db_connect, $query);
	 $editRow = mysqli_fetch_array($result);	//collects item row info
}
?>

<html>
 <head>
	<title>Create Project</title>
	
    <meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    
  	<!-- css -->
	<link href="css/stylesheet.css" rel="stylesheet">
  
  	<!-- Add icon library -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 
	 <!-- Form  validation code -->
	<link rel="stylesheet" href="js/jquery-ui.css" />
	<script src="js/jquery-1.8.3.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script language="javascript" src="js/jquery.validation.js"></script>

</head>

<body>
	<!-- nav bar -->
	<div class="nav">
	    <p id="website-name">Keoabetswe <strong>Nthite</strong></p>

	    <label for="toggle">&#9776;</label>
	    <input type="checkbox" id="toggle"/>
	            
		<div class="menu">
		   	 <!-- logged in Admin -->
			<?php  if (isset($_SESSION['username'])) : ?>
  			 <a href="login.php?logout='1'">logout</a>
			 <?php endif ?>
		</div>
	</div>

	<div class="container">
		<h2 id="body-title">Create Project</h2>
		
		<form method="post">
		<center><table cellpadding="2" cellspacing="2">				 			  
					 	<tr>
							<td>Project Type</td>
							<td>
								<div class="input-form">
									<input type="text" name="project_type">
							  	</div>
							</td>
						</tr>
						
						<tr>
							<td>Project Name</td>
							<td>
								<div class="input-form">
									<input type="text" name="project_name">
							  	</div>
							</td>
						</tr>

						<tr>
							<td>Description</td>
							<td>
								<div class="input-form">
									<input type="text" name="project_desc">
							  	</div>
							</td>
						</tr>

						<tr>
							<td>Language(s)</td>
							<td>
								<div class="input-form">
									<input type="text" name="project_language">
							  	</div>
							</td>
						</tr>

								
						<tr>
							<td>Github Link</td>
							<td>
								<div class="input-form">
									<input type="text" name="project_github_link">
							  	</div>
							</td>
						</tr>

						<tr>
							<td>Live Link</td>
							<td>
								<div class="input-form">
									<input type="text" name="project_live_link">
							  	</div>
							</td>
						</tr>

						<tr>
						<tr>
							<td>Project Image</td>
							<td>
								<div class="input-form">
									<input id="input-attachment" type="file" id="image" name="project_image" accept="images/*" ><!-- adds an image -->
							  	</div>
							</td>
						</tr>
					
						<tr>
							<td>&nbsp;</td>
							<td>
							<div class="input-form">
								<button type="submit" class="btn btn-backend submit" name="btnCreate" style="width:70px;">Submit</button>
								<button type="submit" class="btn" name="btnCancel">Cancel</button>							  				
							</td>
						</tr>		
					</table>
				</center>
				</form>	
	</div>

</body>
</html>