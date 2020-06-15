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

if(isset($_POST['btnEdit']))
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

if(isset($_POST['btnEditCancel']))
{
	//re-direct to admin page
	header("location: back-end.php");
}

?>

<html>
 <head>
	<title>Edit Project</title>

    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portfolio</title>
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
	</div>

	<div class="container">
			<h2 id="body-title">Edit Project</h2>
				<!-- Login Form -->		
				 <form method="post" action="user_process.php">
				 <center><table cellpadding="2" cellspacing="2">
							
					    <tr>
							<td>Project Num</td>
							<td>
								<div class="input-form">
									<input type="text" name="project_id" value="<?php echo $editProject['project_id'];?>">
							  	</div>
							</td>
						</tr>
						
						<tr>
							<td>Project Type</td>
							<td>
								<div class="input-form">
									<input type="text" name="project_type" value="<?php echo $editProject['project_type'];?>">
							  	</div>
							</td>
						</tr>
						
						<tr>
							<td>Project Name</td>
							<td>
								<div class="input-form">
									<input type="text" name="project_name" value="<?php echo $editProject['project_name'];?>">
							  	</div>

							</td>
						</tr>

						<tr>
							<td>Description</td>
							<td>
								<div class="input-form">
									<input type="text" name="project_desc" value="<?php echo $editProject['project_desc'];?>">
							  	</div>

							</td>
						</tr>
						
						<tr>
							<td>Project Date</td>
							<td>
								<div class="input-form">
									<input type="text" name="project_date" value="<?php echo $editProject['project_date'];?>">
							  	</div>

							</td>
						</tr>
						
						<tr>
							<td>Language(s)</td>
							<td>
								<div class="input-form">
									<input type="text" name="project_language" value="<?php echo $editProject['project_language'];?>">
							  	</div>

							</td>
						</tr>

								
						<tr>
							<td>Github</td>
							<td>
								<div class="input-form">
									<input type="text" name="project_github_link" value="<?php echo $editProject['github_link'];?>">
							  	</div>
							</td>
						</tr>

						<tr>
							<td>Live</td>
							<td>
								<div class="input-form">
									<input type="text" name="project_live_link" value="<?php echo $editProject['live_link'];?>">
							  	</div>
							</td>
						</tr>

						<tr>
							<td>Project Image</td>
							<td>
								<div class="input-form">
									<input id="input-attachment" type="file" id="image" name="project_image" accept="images/*"><!-- adds an image -->
							  	</div>
							</td>
						</tr>
					
						<tr>
							<td>&nbsp;</td>
							<td>
							<div class="input-form">
								<button type="submit" class="btn btn-form submit" name="btnEdit">Update</button>
								<button type="submit" class="btn btn-form submit" name="btnEditCancel">Cancel</button>	
							</div>						  				
							</td>
						</tr>
					</table>
				</center>
			  </form>				
	</div>

</body>
</html>