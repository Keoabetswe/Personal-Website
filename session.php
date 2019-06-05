<?php
session_start(); //starts the session

$db_host="localhost";	
$db_username="root";	
$db_password="";	
$db = "personal_website";

$db_connect = mysqli_connect($db_host, $db_username, $db_password,$db);	

//stores the session
$user_check = $_SESSION['username'];

//fetches all user info
$query = "SELECT FName From users WHERE username = '$user_check'";
$session_result = mysqli_query($db_connect, $query);
$row = mysqli_fetch_assoc($session_result);
$login_session = $row['username'];



?>