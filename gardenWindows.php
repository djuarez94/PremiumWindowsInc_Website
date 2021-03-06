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
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img class="fill" src="img/PremiumSite_imgs/gardenWindowsPG_Imgs/gardenWindows_slideshow_1.jpg" alt="doorSlide_1">
            <div class="carousel-caption">
                <!-- <h3>Los Angeles</h3> -->
                <!-- <p>LA is always so much fun!</p> -->
            </div>
        </div>

        <div class="item">
            <img class="fill" src="img/PremiumSite_imgs/gardenWindowsPG_Imgs/gardenWindows_slideshow_2.jpg" alt="doorSlide_2">
            <div class="carousel-caption">
                <!-- <h3>Chicago</h3> -->
                <!-- <p>Thank you, Chicago!</p> -->
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
        <div class="intro">
            <h2>Garden Windows</h2>
            <p>Garden Windows extend out from the house and generally have side vents and an interior shelf which is perfect for plants or herbs. Our flexible design includes single hung side vents which open easily for ventilation. The window joints are designed to give maximum stability to withstand weight while still looking seamless. The bottom shelf provides a barrier against extreme temperatures which will protect you and your home from the heat or cold. These will also give the appearance of a larger room inside your house.</p>
        </div>
        <div class="windowGallery">
            <div class="gallery">
              <img src="img/PremiumSite_imgs/gardenWindowsPG_Imgs/gardenWindows_1.jpg" data-toggle="modal" data-target="#myModal" width="300px">
            </div>

        </div>
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Reed</h4>
              </div>
              <div class="modal-body">
                <img src="img/PremiumSite_imgs/gardenWindowsPG_Imgs/gardenWindows_1.jpg" width="100%">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <div class="windowList">
            <ul>
                <h2>Garden Window Specifics:</h2>
                <li>Single Hung side vents</li>
                <li>One adjustable shelf</li>
                <li>White or almond</li>
                <li>No grid options available</li>
            </ul>
        </div>
<?php include 'include/footer.php' ?>
    </body>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</html>