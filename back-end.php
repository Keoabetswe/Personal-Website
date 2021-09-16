<?php
session_start();

// connects to the database
$db_host="";	
$db_username="";	
$db_password="";	
$db_name="";


$db_connect = mysqli_connect($db_host, $db_username, $db_password, $db_name);	


if (isset($_GET['logout'])) 
{
	   session_destroy();
	  unset($_SESSION['username']);
	  header("location: login.php");
}

if(isset($_GET["action"]))
{
	if($_GET['action'] == "admin_delete")
	{
		$id = $_GET['id'];
		$delete_query = "DELETE FROM projects WHERE project_id = '$id'";
		$delete = mysqli_query($db_connect, $delete_query);
	}
}
?>

<html>
 <head>
	<title>Back End</title>
	
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portfolio</title>
	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
	<link rel="icon" href="images/code.ico">	
			
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
	<div class="nav">
	    <p id="website-name">Keoabetswe <strong>Nthite</strong></p>

	    <label for="toggle">&#9776;</label>
	    <input type="checkbox" id="toggle"/>
	</div>

	<div class="container">         
			<h2 id="body-title">Back End</h2>
			
				<table class="table table-bordered table-hover">
					<tr>
						<th width="3%">Num</th>
						<th width="7%">Type</th>
						<th width="7%">Name</th>
						<th width="7%">Description</th>
						<th width="7%">Created</th>
						<th width="7">Tech</th>
						<th width="5%">GitHub</th>		
						<th width="5%">Live</th>
						<th width="5%">Image</th>
													
						<th width="7%">Action</th>
					</tr>

					<?php
						$projects_query = "SELECT * FROM projects";
						$projects_result = mysqli_query($db_connect, $projects_query);
						
						if($projects_result->num_rows > 0)
						{
							while($row = $projects_result-> fetch_assoc())
							{?>
								<tr>
									<td><?php echo $row['project_id'] ?></td>
									<td><?php echo $row['project_type'] ?></td>
									<td><?php echo $row['project_name'] ?></td>
									<td><?php echo $row['project_desc'] ?></td>																															
									<td><?php echo $row['project_date'] ?></td>
									<td><?php echo $row['project_language'] ?></td>
									<td><?php echo $row['github_link'] ?></td>
									<td><?php echo $row['live_link'] ?></td>
									<td><?php echo $row['project_image'] ?></td>
									
									<td align="center">
										<!-- edit button -->
										<a href="editProject.php?id=<?php echo $row['project_id']?>"><span style="color:green;">Edit</span></a> | 
										
										<!-- delete button -->
										<a href="back-end.php?id=<?php echo $row['project_id'] ?>&action=admin_delete"  
										onclick="return confirm('Are you sure?')"><span class="text-danger">Delete</span></a> 
									</td>																		
								</tr>
					<?php
							}	
						}		
					?>						
			</table>
					<center><a href="createProject.php"><input type="submit" class="btn btn-form submit" name="project-form" value="Create Project"/></a></center>				
	</div>

</body>
</html>