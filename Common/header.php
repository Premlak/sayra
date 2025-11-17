<!DOCTYPE html>
<html>
<head>
    <title>CHAUDHARY DEVI LAL UNIVERSITY</title>
    <link rel="shortcut icon" href="./Images/cdlu logo.png" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* Navbar transparent so carousel shows behind */
        .navbar {
            background: rgba(0,0,0,0.5);
            z-index: 10;
            position: absolute;
            width: 100%;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link {
            color: #fff;
            font-weight: 500;
            transition: 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #00ffd5;
        }

        .carousel-inner img {
            width: 100%;
            height: 250px; /* adjust as needed */
            object-fit: cover;
        }

        .navbar-brand img {
            height: 60px;
            width: auto;
            border-radius: 5px;
            margin-right: 10px;
        }
		.carousel-img {
    height: 350px; /* adjust as needed */
    object-fit: cover;
    transition: transform 0.5s ease;
}

.carousel-img:hover {
    transform: scale(1.05);
}

.carousel-caption {
    background: rgba(0, 0, 0, 0.4);
    padding: 15px 25px;
    border-radius: 10px;
    text-align: left;
}

.carousel-caption h3 {
    font-weight: bold;
    color: #00ffd5;
}

.carousel-caption p {
    color: #ffffff;
    font-size: 0.95rem;
}

.carousel-indicators li {
    background-color: #00ffd5;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    filter: invert(1);
}
.carousel-img {
    width: 100%;
    height: auto; /* Flexible height */
    max-height: 400px; /* Optional: max height to control large images */
    object-fit: contain; /* ensures full image is visible */
    transition: transform 0.5s ease;
}

.carousel-img:hover {
    transform: scale(1.03); /* slight zoom on hover */
}

    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark header-back sticky-top">
    <a class="navbar-brand d-flex align-items-center" href="index.php">
        <img src="images/cdlu logo.png" class="logo-image" width="120" height="100">
        <h3 class="text-light text-uppercase ml-2">CHAUDHARY DEVI LAL UNIVERSITY</h3>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li>
            <li class="nav-item"><a class="nav-link" href="academics.php">ACADEMICS</a></li>
            <li class="nav-item"><a class="nav-link" href="admission.php">ADMISSION</a></li>
            <li class="nav-item"><a class="nav-link" href="#">SHOPPING</a></li>
            <li class="nav-item"><a class="nav-link" href="#">BLOOD-DONATION</a></li>
            <li class="nav-item"><a class="nav-link" href="#">DOC-TRACKING</a></li>
            <li class="nav-item"><a class="nav-link" href="#">HOSTEL-MANAGMENT</a></li>
            <li class="nav-item"><a class="nav-link" href="#">CDLU CAFE CONNECT</a></li>
            <li class="nav-item"><a class="nav-link" href="https://threatmap.bitdefender.com/">BIT DEFENDER</a></li>
            <li class="nav-item">
                <a class="nav-link" href="login/login.php">
                    <i class="fa fa-sign-in text-white fa-lg" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>

<!-- Carousel -->
<div id="navbarCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#navbarCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#navbarCarousel" data-slide-to="1"></li>
        <li data-target="#navbarCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Carousel Items -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/vc.png" class="d-block w-100 carousel-img" alt="Slide 1">
            <div class="carousel-caption d-none d-md-block">
                <h3>Vice Chancellor</h3>
                <p>Leading the university towards excellence</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/imperial-banner.jpg" class="d-block w-100 carousel-img" alt="Slide 2">
            <div class="carousel-caption d-none d-md-block">
                <h3>Campus Life</h3>
                <p>Experience vibrant student life at CDLU</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/dept.png" class="d-block w-100 carousel-img" alt="Slide 3">
            <div class="carousel-caption d-none d-md-block">
                <h3>Departments & Labs</h3>
                <p>State-of-the-art facilities for learning</p>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="carousel-control-prev" href="#navbarCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#navbarCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
