<?php
// connects to the database
$db_host="us-cdbr-east-02.cleardb.com";	
$db_username="bd1f066e6f1964";	
$db_password="108a612f";	
$db_name="heroku_ad3b847ae807a1b";

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
if (isset($_POST['btnLogin'])) 
{
  // receives all input values from the upcoming classes form
  $user = mysqli_real_escape_string($db_connect, $_POST['username']);
  $pass = mysqli_real_escape_string($db_connect, $_POST['pass']);

  if (count($errors) == 0) 
  {
      //$password = md5($password);
        //inserts into login tbl
      $login_query = "SELECT * FROM users WHERE username = '$user' AND pass = '$pass'";
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
