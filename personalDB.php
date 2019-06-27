<!-- This script creates the DB and tables dynamically in phpMyAdmin -->

<?php 	

for($x = 0; $x < 2; $x++)
{

include("DBConn.php");	

//selects test databse	
$db = mysqli_select_db($db_connect,"personal_website");
	
//db create query 
$db_query = "create database personal_website"; //db name on phpMyAdmin on the Panel
	
//table create queries
$users = 'create table users(
				user_id int NOT NULL Primary Key AUTO_INCREMENT,
				username varchar(50) NOT NULL,
				password varchar(50) NOT NULL)';


$contact_form = 'create table contact(
				form_id int NOT NULL Primary Key AUTO_INCREMENT,
				form_name varchar(50) NOT NULL,
				form_surname varchar(50) NOT NULL,
				form_email varchar(50) NOT NULL,
				form_date date NOT NULL,
				form_message varchar(500) NOT NULL)';


$blog_posts = 'create table blogs(
				blog_id int NOT NULL Primary Key AUTO_INCREMENT,
				blog_title varchar(50) NOT NULL,
				blog_date date NOT NULL,
				blog_entry varchar(1000) NOT NULL)';
				
$projects = 'create table projects(
				project_id int NOT NULL Primary Key AUTO_INCREMENT,
				project_type varchar(50) NOT NULL,
				project_name varchar(50) NOT NULL,
				project_desc varchar(500) NOT NULL,
				project_date date NOT NULL,		
				project_language varchar(50) NOT NULL,								
				project_image varchar(50) NOT NULL,
				project_contributors varchar(100) NOT NULL)';

				
				
			
//drops BOTH table	tbl_user and tbl_item
$tbl_drop1 = "drop table users";
$tbl_drop2 = "drop table contact_form";
$tbl_drop3 = "drop table blog_posts";
$tbl_drop4 = "drop table projects";

	

//checks if the db exists		
	if(empty($db))
	{
		echo "<h3>Database not found</h3>";		
	
		//executes db query
		$db_create = mysqli_query($db_connect, $db_query);			
			
		if(!$db_create)
		{
			echo "<h3>Database not created</h3>";
		}
		else
		{
			echo "<h3>Database created</h3>";
		}
	}
	else
	{
		echo "<h3>database exists</h3>";
		
		//query to check the table
		$select = "select * from users";
		$query_tbl = mysqli_query($db_connect, $select);
	
		//checks if the table exists
		if(!$query_tbl)
		{
			echo "<h3>Tables not found</h3>";
			
			//re-create the tables
			$tbl_create1 = mysqli_query($db_connect, $users);
			$tbl_create2 = mysqli_query($db_connect, $contact_form);
			$tbl_create3 = mysqli_query($db_connect, $blog_posts);
			$tbl_create4 = mysqli_query($db_connect, $projects);
		}
		else 
		{
			echo "<h3>Tables exist</h3>";	
			
			//drops tables if they exist
			$drop_users = mysqli_query($db_connect, $tbl_drop1);
			$drop_forms = mysqli_query($db_connect, $tbl_drop2);
			$drop_blogs = mysqli_query($db_connect, $tbl_drop3);		
			$drop_projects = mysqli_query($db_connect, $tbl_drop4);								
			echo "<h3>Tables dropped</h3>";
							
			//re-create the tables
			$tbl_create1 = mysqli_query($db_connect, $users);
			$tbl_create2 = mysqli_query($db_connect, $contact_form);
			$tbl_create3 = mysqli_query($db_connect, $blog_posts);			
			$tbl_create4 = mysqli_query($db_connect, $projects);			
									
			echo "<h3>Tables Re-created</h3>";
		}	
	}
}
	

	
?> 
