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
					<li class="active"><a href="certificates.php">Certificates</a></li>
					<li><a href="careers.php">Careers</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</div>
	</nav>
        <div class="certificates">
            <div class="award">
                <img src="img/PremiumSite_imgs/CertsPage_Imgs/CertificatesImg_1.jpg">
                <p>The American Architectural Manufacturers Association (AAMA) is an organization that is comprised of large & small companies that are both residentially & commercially focused. The AAMA certification label shows that the products meet rigorous performance standards.</p>
            </div>
            <div class="award">
                <img src="img/PremiumSite_imgs/CertsPage_Imgs/CertificatesImg_2.jpg">
                <p>The National Fenestration Rating Council (NFRC) is a non-profit organization, which provides performance ratings on windows, doors and skylights. The NFRC label gives assurance of code compliance and gives credit to the brand.</p>
            </div>
			<div class="warranty">
				<img src="img/PremiumSite_imgs/CertsPage_Imgs/CertificatesImg_3.jpg">
				<p><strong>Full Lifetime Transferable Warranty</strong></p>
				<p>Premium Windows offers a full lifetime warranty on all products. We want to provide piece of mind to our customers.</p>
				<button type="button" name="button"><a href="#">Download Warranty</a></button>
				<button type="button" name="button"><a href="request-service.php">Request Service</a></button>
			</div>
        </div>
        <?php include 'include/footer.php' ?>
    </body>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</html>