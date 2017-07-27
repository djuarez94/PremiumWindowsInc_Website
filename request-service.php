<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Premium Windows Inc || Home</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="img/PremiumSite_imgs/PremiumWindows_Logo.jpg" alt="Premium Windows Logo" width="80px"></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Products
						<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="glass.php">Glass</a></li>
						<li><a href="windows.php">Windows</a></li>
						<li><a href="doors.php">Doors</a></li>
					</ul>
					</li>
					<li><a href="certificates.php">Certificates</a></li>
					<li><a href="careers.php">Careers</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</div>
	</nav>
		<div class="contact" id="contactUs">
			<h2>Service Request Form</h2>
			<form method="post" action="request-service.php#alert" class="form-horizontal  text-left">
				<div class="form-group text-left">
					<label for="name">Name:</label>
					<input name="name" type="name" class="form-control" id="name" placeholder= "Enter Name">
				</div>
				<div class="form-group text-left">
					<label for="email">Email:</label>
					<input name="email" type="email" class="form-control" id="email" placeholder= "Enter email address">

                    <input type="checkbox" name="email-updates" value="Bike">Check here to receive email updates<br>
				</div>
				<div class="form-group text-left">
					<label for="subject">Phone:<span>*</span></label>
					<input name="subject" type="text" class="form-control" id="subject" placeholder= "Enter phone number">
				</div>
                <div class="form-group text-left">
					<label for="subject">Preferred contact method:</label>
					<input name="subject" type="text" class="form-control" id="subject" placeholder= "Enter method (e.g. phone)">
				</div>
                <div class="form-group text-left">
					<label for="subject">Address: <span>*</span></label>
					<input name="subject" type="text" class="form-control" id="subject" placeholder= "Enter address">
				</div>
				<div class="form-group text-left">
					<label for="message">Comments: <span>*</span></label>
					<textarea class="form-control" rows="4" cols="50" id="message" name="message" style="width:100%" placeholder= "Enter comments" ></textarea>
                    <p>Have we visited you before?</p>
                    <input type="checkbox" name="visited" value="Yes">Yes<br>
                    <input type="checkbox" name="visited" value="No">No<br>
				</div>
                <div class="form-group text-left">
					<label for="subject">Order number:</label>
					<input name="subject" type="text" class="form-control" id="subject" placeholder= "Enter text here">
				</div>
                <div class="form-group text-left">
					<label for="subject">Contractors number:</label>
					<input name="subject" type="text" class="form-control" id="subject" placeholder= "Enter text here">
				</div>
				<input id="submitButton" type="submit" value="Send" name="submit">
			</form>
		</div>
    <?php include 'include/footer.php' ?>
    </body>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</html>