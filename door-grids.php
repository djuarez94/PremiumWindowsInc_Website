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
					<li class="dropdown active">
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
        <div class="header">
            <div class="slideshow">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				    <!-- Indicators -->
				    <ol class="carousel-indicators">
				        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				        <li data-target="#myCarousel" data-slide-to="1"></li>
				        <li data-target="#myCarousel" data-slide-to="2"></li>
				        <li data-target="#myCarousel" data-slide-to="3"></li>
				    </ol>

				    <!-- Wrapper for slides -->
				    <div class="carousel-inner">
				        <div class="item active">
				            <img class="fill" src="img/PremiumSite_imgs/DoorGridsPage_Imgs/DoorGrid_SlideImg_1.jpg" alt="homeSlide_1">
				            <div class="carousel-caption">
				                <!-- <h3>Los Angeles</h3> -->
				                <!-- <p>LA is always so much fun!</p> -->
				            </div>
				        </div>

				        <div class="item">
				            <img class="fill" src="img/PremiumSite_imgs/DoorGridsPage_Imgs/DoorGrid_SlideImg_2.jpg" alt="homeSlide_2">
				            <div class="carousel-caption">
				                <!-- <h3>Chicago</h3> -->
				                <!-- <p>Thank you, Chicago!</p> -->
				            </div>
				        </div>

				        <div class="item">
				            <img class="fill" src="img/PremiumSite_imgs/DoorGridsPage_Imgs/DoorGrid_SlideImg_3.jpg" alt="homeSlide_3">
				            <div class="carousel-caption">
				                <!-- <h3>New York</h3> -->
				                <!-- <p>We love the Big Apple!</p> -->
				            </div>
				        </div>

						<div class="item">
				            <img class="fill" src="img/PremiumSite_imgs/DoorGridsPage_Imgs/DoorGrid_SlideImg_4.jpg" alt="homeSlide_3">
				            <div class="carousel-caption">
				                <!-- <h3>New York</h3> -->
				                <!-- <p>We love the Big Apple!</p> -->
				            </div>
				        </div>
				    </div>

				<!-- Left and right controls -->
				    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				        <span class="glyphicon glyphicon-chevron-left"></span>
				        <span class="sr-only">Previous</span>
				    </a>
				    <a class="right carousel-control" href="#myCarousel" data-slide="next">
				        <span class="glyphicon glyphicon-chevron-right"></span>
				        <span class="sr-only">Next</span>
				    </a>
				</div>
            </div>
			<div class="text">
                <h2>Grids</h2>
                <p>Premium Windows offers the unique look of grids to almost all of our windows and doors. These pieces are aluminum and are permanently sealed between panes of insulating glass, which creates a smooth surface that is easy to clean. We have many different layouts to choose from. We offer ¾" flat grids, or 1" sculptured grids to create a polished look. Grids are available in white or almond only.</p>
            </div>
        </div>
        <div class="grids">
            <p>Scroll down to view all Grid Layouts</p>
            <img  class="fill" src="img/PremiumSite_imgs/DoorGridsPage_Imgs/DoorGrid_ImgSet_1.jpg">
            <h2>Colonial Grids</h2>
            <img  class="fill" src="img/PremiumSite_imgs/DoorGridsPage_Imgs/DoorGrid_ImgSet_2.jpg">
            <h2>6-Lite Prairie Grids</h2>
            <img  class="fill" src="img/PremiumSite_imgs/DoorGridsPage_Imgs/DoorGrid_ImgSet_3.jpg">
            <h2>9-Lite Prairie Grids</h2>
            <img  class="fill" src="img/PremiumSite_imgs/DoorGridsPage_Imgs/DoorGrid_ImgSet_4.jpg">
            <h2>Victorian Grids</h2>
            <img  class="fill" src="img/PremiumSite_imgs/DoorGridsPage_Imgs/DoorGrid_ImgSet_5.jpg">
            <h2>Double Prairie Grids</h2>
            <img  class="fill" src="img/PremiumSite_imgs/DoorGridsPage_Imgs/DoorGrid_ImgSet_6.jpg">
            <h2>Marginal Grids</h2>
			<img  class="fill" src="img/PremiumSite_imgs/DoorGridsPage_Imgs/DoorGrid_ImgSet_7.jpg">
        </div>
        <?php include 'include/footer.php' ?>
    </body>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</html>