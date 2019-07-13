<?php
session_start();

$db_host="localhost";	
$db_username="root";	
$db_password="";	
$db_name="personal_website";
$db_connect = mysqli_connect($db_host, $db_username, $db_password, $db_name);	


if (isset($_GET['logout'])) 
{
	session_destroy();
  	unset($_SESSION['username']);
 	header("location: index.html");
}

if(isset($_GET["id"]))
{
	$query = "SELECT * FROM projects WHERE project_id = ".$_GET['id'];
	$result = mysqli_query($db_connect, $query);
	 $editRow = mysqli_fetch_array($result);	//collects item row info
}

if(isset($_POST['create']))
{
	//stores updated values
	$id = $_POST['id'];
	$type = $_POST['type'];	
	$name = $_POST['name'];
	$desc = $_POST['desc'];		
	$date = getdate(); //gets current system date
	$language = $_POST['language'];	
	$contributors = $_POST['contributors'];	
	$image = $_POST['image'];	
	
	$add_query = "INSERT INTO projects (project_type, project_name, project_desc,project_date,project_language,project_image,project_contributors) VALUES ('$type', '$name', '$desc', '$date', '$language', '$image','$contributors')";
	$result = mysqli_query($db_connect,$add_query);
	header("location: back-end.php");
}

if(isset($_POST['cancel']))
{
	//cancels the item and re-directs to admin page
	header("location: back-end.php");
}

?>

<html>
 <head>
	<title>Create Project</title>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

	 <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
     
    <!-- Add icon library -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    		
    <!-- Custom styles for this stylsheet -->
	 <link href="css/stylesheet.css" rel="stylesheet" type="text/css">
	 
	 <!-- Form  validation code -->
	<link rel="stylesheet" href="js/jquery-ui.css" />
	<script src="js/jquery-1.8.3.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script language="javascript" src="js/jquery.validation.js"></script>

</head>

<body>
	<!-- nav bar -->
	<div class="nav">
	    <p id="NameHeader" style="font-size:25px;">Keoabetswe <strong>Nthite</strong></p>

	    <label for="toggle">&#9776;</label>
	    <input type="checkbox" id="toggle"/>
	            
		<div class="menu">
		   	 <!-- logged in Admin -->
			<?php  if (isset($_SESSION['username'])) : ?>
  			 <a href="login.php?logout='1'" style="color: red; background:grey;">logout</a>
			 <?php endif ?>
		</div>
		
		<!-- break -->
	    <br/>
	</div>

<!-- Place the whole page in a column narrower than the full screen on a large screen-->
	<div class="container">
 		
		<!-- Header -->
		<div id="top" class="row">
			
			 <!--main heading-->
			<center><h1>Create Project</h1></center>
		</div>
		
		<br/>
		<!-- Content row -->
		<div class="row" id="content" style="background-color:lightgrey;">            
			<div id="maincontent" >		

			<div id="content" style="background-color:lightgrey;">
			
				<!-- Create Project Form -->		
				 <form method="post">
					 <center><table cellpadding="2" cellspacing="2">
					 
							  
					 	<tr>
							<td>Project Type</td>
							<td>
								<div class="input-login">
									<input type="text" name="type">
							  	</div>
							</td>
						</tr>
						
						<tr>
							<td>Project Name</td>
							<td>
								<div class="input-login">
									<input type="text" name="name">
							  	</div>
							</td>
						</tr>

						<tr>
							<td>Description</td>
							<td>
								<div class="input-login">
									<input type="text" name="desc">
							  	</div>
							</td>
						</tr>
						
						<tr>
							<td>Language(s)</td>
							<td>
								<div class="input-login">
									<input type="text" name="language">
							  	</div>
							</td>
						</tr>

								
						<tr>
							<td>Contributor(s)</td>
							<td>
								<div class="input-login">
									<input type="text" name="contributors">
							  	</div>
							</td>
						</tr>

						<tr>
						<tr>
							<td>Project Image</td>
							<td>
								<div class="input-group">
									<input type="file" id="image" name="image" accept="images/*" ><!-- adds an image -->
							  	</div>
							</td>
						</tr>
					
						<tr>
							<td>&nbsp;</td>
							<td>
							<div class="input-login">
								<button type="submit" class="btn btn-backend submit" name="create" style="width:70px;">Submit</button>
								<button type="submit" class="btn" name="cancel">Cancel</button>							  				
							</td>
						</tr>
					
					</table></center>
				</form>	

			</div>		
		</div>
	</div>
	</div>

</body>
</html>