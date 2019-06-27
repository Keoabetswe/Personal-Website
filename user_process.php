<?php

// connects to the database
$db_host="localhost";	
$db_username="keontuzb";	
$db_password="keontuzb_keo";	
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
/*if (isset($_POST['login'])) 
{
  // receives all input values from the upcoming classes form
  $user = mysqli_real_escape_string($db, $_POST['username']);
  $pass = mysqli_real_escape_string($db, $_POST['password']);
  
  //inserts into login tbl
  $login_query = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
  mysqli_query($db, $login_query);


  //redirects user to thank you page
  header('location:back-end.php'); 
}	*/

/* -------------------------------------------------------------------------*/
//Project Form (Back-End)
/*if (isset($_POST['portfolio'])) 
{
  // receives all input values from the upcoming classes form
  $pro_title = mysqli_real_escape_string($db, $_POST['project_title']);
  $pro_type = mysqli_real_escape_string($db, $_POST['project_type']);
  $pro_name = mysqli_real_escape_string($db, $_POST['project_name']);
  $pro_description = mysqli_real_escape_string($db, $_POST['project_desc']);    
  $date = getdate(); //gets current system date
  $pro_lang = mysqli_real_escape_string($db, $_POST['project_language']);
  $pro_img = mysqli_real_escape_string($db, $_POST['project_image']);
  $pro_contributors = mysqli_real_escape_string($db, $_POST['project_contributors']);        


  
//inserts into projects tbl
$portfolio = "INSERT INTO projects(project_title,project_type,project_name,project_desc, project_date,project_language,project_image,project_contributors) VALUES('$pro_title','$pro_type','$pro_name','$pro_description', '$pro_date','$pro_lang','$pro_img','$pro_contributors')";
mysqli_query($db, $portfolio);  	

//redirects user to # page
header('location:#.html'); 	
}*/



?>