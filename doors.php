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
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img class="fill" src="img/PremiumSite_imgs/DoorsPage_Imgs/WindowsPage_SlideImg_1.jpg" alt="homeSlide_1">
            <div class="carousel-caption">
                <!-- <h3>Los Angeles</h3> -->
                <!-- <p>LA is always so much fun!</p> -->
            </div>
        </div>

        <div class="item">
            <img class="fill" src="img/PremiumSite_imgs/DoorsPage_Imgs/WindowsPage_SlideImg_2.jpg" alt="homeSlide_2">
            <div class="carousel-caption">
                <!-- <h3>Chicago</h3> -->
                <!-- <p>Thank you, Chicago!</p> -->
            </div>
        </div>

        <div class="item">
            <img class="fill" src="img/PremiumSite_imgs/DoorsPage_Imgs/WindowsPage_SlideImg_3.jpg" alt="homeSlide_3">
            <div class="carousel-caption">
                <!-- <h3>New York</h3> -->
                <!-- <p>We love the Big Apple!</p> -->
            </div>
        </div>

        <div class="item">
            <img class="fill" src="img/PremiumSite_imgs/DoorsPage_Imgs/WindowsPage_SlideImg_4.jpg" alt="homeSlide_4">
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
        <div class="intro">
            <h2>Doors</h2>
            <p>Selecting a Premium Windows door will add the perfect passage between your home or building and the outdoors. Your door should inspire beauty, protection, and security. Choose from a wide variety of quality hardware, colored vinyl, grid options and different configurations. We provide new construction vinyl doors as well as replacement doors. Our doors are made to order and in any quantity you need. Weather this is a new construction job or a replacement door, exterior door or interior door, we have you covered! All of our products are certified, energy efficient, and are backed by our lifetime warranty.</p>
            <button type="button" name="button"><a href="door-grids.php">Pick a Grid</a></button>
            <button type="button" name="button"><a href="frames.php">Door Frames</a></button>
            <button type="button" name="button"><a href="door-hardware.php">Hardware</a></button>
        </div>
        <div class="gallery">
            <div class="windowLink">
                <a href="slidingPatioDoors.php">
					<img src="img/PremiumSite_imgs/DoorsPage_Imgs/WindowsPage_subImg_1.jpg">
	                <p class="descr">Sliding Patio Doors</p>
                </a>
            </div>
            <div class="windowLink">
                <a href="frenchSlidingDoor.php">
                    <img src="img/PremiumSite_imgs/DoorsPage_Imgs/WindowsPage_subImg_2.jpg">
                    <p class="descr">French Sliding Doors</p>
                </a>
            </div>
            <div class="windowLink">
                <a href="frenchSwingDoors.php">
                    <img src="img/PremiumSite_imgs/DoorsPage_Imgs/WindowsPage_subImg_3.jpg">
                    <p class="descr">French Swing Doors</p>
                </a>
            </div>
        </div>
        <?php include 'include/footer.php' ?>
    </body>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</html>