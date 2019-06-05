<?php
// Initialize the session
session_start();

if(session_destroy()) //destroys all sessions
{
	header("location: back-end.php"); //redirects to the page
}

?>