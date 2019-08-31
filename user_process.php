<?php
// connects to the database
$db_host="192.168.110.19";	
$db_username="keontuzb_keo";	
$db_password="Mm@mpeta1";	
$db_name="keontuzb_website";

$db = mysqli_connect($db_host, $db_username, $db_password, $db_name);	

//Contact Form
if (isset($_POST['contact'])) 
{
  // receives all input values from the upcoming classes form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $date = date('Y/m/d');
  $message = mysqli_real_escape_string($db, $_POST['message']);
  
  //Sends Email to CPanel
  //$to = "info@keonthite.co.za"; 
  //$subject = "Personal Website Enquiry"; 

  //$sendEmail = mail($to, $subject, $message);
  
  /*if($sendEmail)
  {
  	 $response = "Your message was successfully sent :)";
  }
  else
  {
  	 $response = "Oops! there was a problem sending your message :(  \nPlease try again...";
  }*/
  
//inserts into contact tbl
$contact_form = "INSERT INTO contact(contact_name,contact_email, contact_date, contact_message) VALUES('$name','$email','$date','$message')";
mysqli_query($db, $contact_form);  	

//redirects user to thank you page
header('location:thank-you.html'); 	
}

/* --------------------------------------------------------------------------*/
//Login Form (Back-End)
if (isset($_POST['login'])) 
{
  // receives all input values from the upcoming classes form
  $user = mysqli_real_escape_string($db, $_POST['username']);
  $pass = mysqli_real_escape_string($db, $_POST['password']);

  if (count($errors) == 0) 
  {
      //$password = md5($password);
        //inserts into login tbl
      $login_query = "SELECT * FROM users WHERE username='$user' AND password = '$pass'";
      $results = mysqli_query($db, $login_query);
      
      if (mysqli_num_rows($results) == 1) 
      {
          $row = mysqli_fetch_array($results); //collects user row info
          $_SESSION['username'] = $name; //stores name for indicating user in a header
          $_SESSION['loggedIn'] = true;	//stores in user login status
          header('location: back-end.php');
      }
      else 
      {
          array_push($errors, "Incorrect username/password combination");
          echo '<script>alert("Incorrect username/password combination")</script>';
          header('location: login.php');
      }
  }
}	

/* -------------------------------------------------------------------------*/
//Project Form (Back-End)
if (isset($_POST['create'])) 
{
  // receives all input values from the upcoming classes form
  $pro_type = mysqli_real_escape_string($db, $_POST['project_type']);
  $pro_name = mysqli_real_escape_string($db, $_POST['project_name']);
  $pro_description = mysqli_real_escape_string($db, $_POST['project_desc']);    
  $date = getdate(); //gets current system date
  $pro_lang = mysqli_real_escape_string($db, $_POST['project_language']);
  $pro_img = mysqli_real_escape_string($db, $_POST['project_image']);
  $pro_contributors = mysqli_real_escape_string($db, $_POST['project_contributors']);        


//inserts into projects tbl
$portfolio = "INSERT INTO projects(project_type,project_name,project_desc, project_date,project_language,project_image,project_contributors) VALUES('$pro_title','$pro_type','$pro_name','$pro_description', '$date','$pro_lang','$pro_img','$pro_contributors')";
mysqli_query($db, $portfolio);  	

//redirects user to # page
header('location:back-end.html'); 	
}

?>

<html>
 <head>
	<title>Thank You</title>
	
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
	
	<!-- maincontent row -->		         
	<div id="maincontent" >		
		<h2 id="contentHeader" style="color:gray;">Thank you, your message has successfuly been sent.</h2>			
	</div>		
	
</body>
</html>