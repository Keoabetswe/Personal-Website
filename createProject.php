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
   			<a href="index.html">Home</a>
	        <a href="about.html">About</a>
		    <a href="blog.html">Blog</a>
	        <a href="portfolio.html">Portfolio</a>
   	        <a href="contact.php">Contact</a>
	    </div>
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
					 
							  
					 <div class="projects-types">
						 <!-- Projects filter option -->
						 <p style="color:black;">Project Type</p>
						 <select name="projects-filter-options">
						 	<option value="all"></option>
						 	<option value="assignments">Assignment</option>
						 	<option value="freelance">Freelance</option>
						 	<option value="personal">Personal</option>			 				 				 	
						 </select>
					 </div>

						<tr>
							<td>
								<div class="input-group">
									<input type="text" name="name" placeholder="Project Name">
							  	</div>

							</td>
						</tr>
						
							<tr>
							<td>
								<div class="input-group">
									<textarea class="form-control" rows="3" cols="57" placeholder="Project Description" id="message" name="message"></textarea>
							  	</div>

							</td>
						</tr>
						
						<tr>
							<td>
								<div class="input-group">
									<input type="text" name="Project Language(s)">
							  	</div>
							</td>
						</tr>
						
						<tr>
							<td>
								<div class="input-group">
									<input type="text" name="Project Contributors">
							  	</div>

							</td>
						</tr>
						
						<tr>
						<td><input type="file" id="image" name="item_image" accept="images/*" ><!-- adds an image --></td>
						</tr>
						
						<tr>
							<td>
								
								<br/><!-- break -->
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