<?php
// connects to the database
$db_host="";	
$db_username="keontuzb_keo";	
$db_password="";	
$db_name="keontuzb_website";

$db_connect = mysqli_connect($db_host, $db_username, $db_password, $db_name);	

//Contact Form
if (isset($_POST['contact'])) 
{
  // receives all input values from the upcoming classes form
  $name = mysqli_real_escape_string($db_connect, $_POST['name']);
  $email = mysqli_real_escape_string($db_connect, $_POST['email']);
  $date = date('Y/m/d');
  $message = mysqli_real_escape_string($db_connect, $_POST['message']);
  
  //Sends Email to CPanel
  /*$to = "KeoNthite@gmail.com"; 
  $subject = "Personal Website Enquiry";
  $body = "Name: " .$name ."\n" 
          ."Email: " .$email ."\n" 
          ."Message: " .$message; 

  $sendEmail = mail($to, $subject, $body);
  
  if($sendEmail)
  {
  	 $response = "Your message was successfully sent :)";
  }
  else
  {
  	 $response = "Oops! there was a problem sending your message :(  \nPlease try again...";
  }*/
  
//inserts into contact tbl
$contact_form = "INSERT INTO contact(contact_name,contact_email, contact_date, contact_message) VALUES('$name','$email','$date','$message')";
mysqli_query($db_connect, $contact_form);  	

//redirects user to thank you page
header('location:thank-you.php'); 	

}

/* --------------------------------------------------------------------------*/
//Login Form (Back-End)
if (isset($_POST['login'])) 
{
  // receives all input values from the upcoming classes form
  $user = mysqli_real_escape_string($db_connect, $_POST['username']);
  $pass = mysqli_real_escape_string($db_connect, $_POST['password']);

  if (count($errors) == 0) 
  {
      //$password = md5($password);
        //inserts into login tbl
      $login_query = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
      $results = mysqli_query($db_connect, $login_query);
      
      if (mysqli_num_rows($results) == 1) 
      {
          $row = mysqli_fetch_array($results); //collects user row info
          $_SESSION['username'] = $name; //stores name for indicating user in a header
          $_SESSION['loggedIn'] = true;	//stores in user login status
          header('location: back-end.php');
      }
      else 
      {
          echo '<script>alert("Incorrect username/password combination")</script>';
          header('location: login.php');
      }
  }
}	

/* -------------------------------------------------------------------------*/
//Project Form (Back-End)
if(isset($_POST['btnCreate']))
{
	//stores updated values
	$id = $_POST['project_id'];
	$type = $_POST['project_type'];	
	$name = $_POST['project_name'];
	$desc = $_POST['project_desc'];		
	$date = getdate(); //gets current system date
	$language = $_POST['project_language'];	
	$github = $_POST['project_github_link'];	
	$live = $_POST['project_live_link'];	
	$image = $_POST['project_image'];	
	
	$create_project_query = "INSERT INTO projects (project_type, project_name, project_desc,project_date,project_language,project_image,github_link, live_link) VALUES ('$type', '$name', '$desc', '$date', '$language', '$image','$github','$live')";
	$result = mysqli_query($db_connect,$create_project_query);
	header("location: back-end.php");
}

/* -------------------------------------------------------------------------*/
//Update Project (Back-end)

?>
