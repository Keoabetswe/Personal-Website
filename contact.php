<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact</title>
	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
	<link rel="icon" href="images/code.ico">

	<!-- css -->
	<link href="css/stylesheet.css" rel="stylesheet">

	<!-- Add icon library -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div class="nav">
		<p id="website-name">Keo'Abetswe <strong>Nthite</strong></p>

		<label for="toggle">&#9776;</label>
		<input type="checkbox" id="toggle" />

		<div class="menu">
			<a href="index.php">Home</a>
			<a href="about.php">About</a>
			<a href="documents/K. NTHITE CV.pdf" target="_blank">CV</a>
			<a href="blog.php">Blog</a>
			<a href="portfolio.php">Portfolio</a>
			<a href="contact.php">Contact</a>
		</div>
	</div>


	<!--  break -->
	<br />

	<div class="container">

		<h2 id="body-title">Contact</h2>

		<p id="sub-body-title">Have a question or want to work together?</p>

		<!-- break -->
		<br />

		<!-- Login Form -->
		<form method="post" action="user_process.php">
			<center>
				<div class="input-contact">
					<input type="text" placeholder="Name" name="name" required="required">
				</div>

				<div class="input-contact">
					<input type="text" placeholder="Email" name="email" required="required">
				</div>

				<div class="input-contact">
					<textarea cols="3" rows="3" placeholder="Message" name="message" required="required"></textarea>
				</div>

				<div class="input-contact">
					<input type="submit" class="btn btn-contact submit" name="contact" value="Submit" />
				</div>
			</center>
		</form>

	</div>

</body>

</html>