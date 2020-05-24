<?php
session_start();

// connects to the database
$db_host="";	
$db_username="keontuzb_keo";	
$db_password="";	
$db_name="keontuzb_website";

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
	<div class="nav">
	    <p id="website-name">Keoabetswe <strong>Nthite</strong></p>

	    <label for="toggle">&#9776;</label>
	    <input type="checkbox" id="toggle"/>
	            
	    <div class="menu">
		   	 <!-- logged in Admin -->
			<?php  if (isset($_SESSION['username'])) : ?>
  			 <a href="login.php?logout='1'" style="color: red; background:blue;">logout</a>
			 <?php endif ?>
	    </div>
	    
	</div>

	<!-- break -->
	<br/>

<!-- Place the whole page in a column narrower than the full screen on a large screen-->
	<div class="container">
 	
				 
		<!-- Header -->
		<div id="top" class="row">
			<center><h1>Back End</h1></center>
		</div>
		
		<!-- Content -->
		<div id="content" style="background-color:lightgrey;">            
			<div id="maincontent" >		
			
				<h1>Projects</h1>
				<table class="table table-bordered table-hover">
					<tr>
						<th width="5%">Project Num</th>
						<th width="10%">Project Type</th>
						<th width="10%">Project Name</th>
						<th width="10%">Description</th>
						<th width="6%">Created</th>
						<th width="10">Language(s)</th>
						<th width="5%">GitHub</th>		
						<th width="7%">Live</th>
						<th width="7%">Image</th>
													
						<th width="10%">Action</th>
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
					<center><a href="createProject.php"><input type="submit" class="btn btn-primary submit" name="project-form" value="Create Project"/></a></center>			
			</div>			
		</div>		
	</div>

</body>
</html>