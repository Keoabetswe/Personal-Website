<?php
session_start();

// connection string
$db_host="";	
$db_username="keontuzb_keo";	
$db_password="";	
$db_name="keontuzb_website";

$db_connect = mysqli_connect($db_host, $db_username, $db_password, $db_name);

if(isset($_GET["id"]))
{
	$query = "SELECT * FROM projects WHERE project_id = ".$_GET['id'];
	$result = mysqli_query($db_connect, $query);
	$editProject = mysqli_fetch_array($result);	//collects item row info
}

if(isset($_POST['btnUpdate']))
{
	//stores updated values
	$id = $_POST['project_id'];
	$type = $_POST['project_type'];	
	$name = $_POST['project_name'];
	$desc = $_POST['project_desc'];		
	$date = $_POST['project_date'];	
	$lang = $_POST['project_language'];		
	$image = $_POST['project_image'];
	$github = $_POST['project_github_link'];				
	$live = $_POST['project_live_link'];				
	
	$update_query = "UPDATE projects set project_type = '$type',project_name = '$name',project_desc = '$desc', project_date = '$date',project_language = '$lang',project_image = '$image',github_link = '$github',live_link = '$live' WHERE ItemID = '$id'";
	$result = mysqli_query($db_connect,$update_query);

	echo '<script>alert("Information Updated!")</script>';
	header("location: back-end.php");
}

if(isset($_POST['cancel']))
{
	//re-direct to admin page
	header("location: back-end.php");
}

?>

<html>
 <head>
	<title>Edit Project</title>
	
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
	    <p id="website-name" style="font-size:25px;">Keoabetswe <strong>Nthite</strong></p>

	    <label for="toggle">&#9776;</label>
	    <input type="checkbox" id="toggle"/>
	            
		<div class="menu">
		   	 <!-- logged in Admin -->
			<?php if(isset($_SESSION['username'])) : ?>
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
			<center><h1>Edit Project</h1></center>
		</div>
		
		<br/>
		<!-- Content row -->
		<div class="row" id="content" style="background-color:lightgrey;">            
			<div id="maincontent" >		

			<div id="content" style="background-color:lightgrey;">
				<!-- Login Form -->		
				 <form method="post" action="editProject.php">
				 <center><table cellpadding="2" cellspacing="2">
							
					    <tr>
							<td>Project Num</td>
							<td>
								<div class="input-login">
									<input type="text" name="project_id" value="<?php echo $editProject['project_id'];?>">
							  	</div>
							</td>
						</tr>
						
						<tr>
							<td>Project Type</td>
							<td>
								<div class="input-login">
									<input type="text" name="project_type" value="<?php echo $editProject['project_type'];?>">
							  	</div>
							</td>
						</tr>
						
						<tr>
							<td>Project Name</td>
							<td>
								<div class="input-login">
									<input type="text" name="project_name" value="<?php echo $editProject['project_name'];?>">
							  	</div>

							</td>
						</tr>

						<tr>
							<td>Description</td>
							<td>
								<div class="input-login">
									<input type="text" name="project_desc" value="<?php echo $editProject['project_desc'];?>">
							  	</div>

							</td>
						</tr>
						
						<tr>
							<td>Project Date</td>
							<td>
								<div class="input-login">
									<input type="text" name="project_date" value="<?php echo $editProject['project_date'];?>">
							  	</div>

							</td>
						</tr>
						
						<tr>
							<td>Language(s)</td>
							<td>
								<div class="input-login">
									<input type="text" name="project_language" value="<?php echo $editProject['project_language'];?>">
							  	</div>

							</td>
						</tr>

								
						<tr>
							<td>Github</td>
							<td>
								<div class="input-login">
									<input type="text" name="project_github_link" value="<?php echo $editProject['github_link'];?>">
							  	</div>
							</td>
						</tr>

						<tr>
							<td>Live</td>
							<td>
								<div class="input-login">
									<input type="text" name="project_live_link" value="<?php echo $editProject['live_link'];?>">
							  	</div>
							</td>
						</tr>

						<tr>
							<td>Project Image</td>
							<td>
								<div class="input-group">
									<input type="file" id="image" name="project_image" accept="images/*" ><!-- adds an image -->
							  	</div>
							</td>
						</tr>
					
						<tr>
							<td>&nbsp;</td>
							<td>
							<div class="input-login">
								<button type="submit" class="btn btn-backend submit" name="btnUpdate" style="width:70px;">Update</button>
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