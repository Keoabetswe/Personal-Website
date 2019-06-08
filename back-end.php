

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

	<!-- break -->
	<br/>

<!-- Place the whole page in a column narrower than the full screen on a large screen-->
	<div class="container">
 		
		<!-- Header -->
		<div id="top" class="row">
			
			 <!--main heading-->
			<center><h1>Back End</h1></center>
		</div>
		
		<!-- Content row -->
		<div class="row" id="content" style="background-color:lightgrey;">            
			<div id="maincontent" >		
			
				<h1>Projects</h1>
				<table class="table table-bordered table-hover">
					<tr>
						<th width="10%">Project Num</th>
						<th width="10%">Project Type</th>
						<th width="20%">Project Name</th>
						<th width="6%">Duration</th>
						<th width="5">Language(s)</th>
						<th width="15%">Contributor(s)</th>		
						<th width="7%">Image</th>
			
													
						<th width="10%">Action</th>

					</tr>
								
				</table>
				
					<center><input type="submit" class="btn btn-primary submit" name="project-form" value="Create Project"/></center>			
			</div>			
		</div>		
	</div>

</body>
</html>