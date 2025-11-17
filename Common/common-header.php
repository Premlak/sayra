<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CHAUDHARY DEVI LAL UNIVERSITY</title>
    <link rel="shortcut icon" href="../Images/CDLU logo.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        /* Navbar background gradient + shadow */
        .header-back {
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
            padding: 10px 20px;
            transition: all 0.3s ease;
        }

        /* Navbar brand: logo + text */
        .navbar-brand h3 {
            font-size: 1.2rem;
            font-weight: bold;
            transition: transform 0.3s ease, color 0.3s ease;
        }
        .navbar-brand h3:hover {
            color: #00ffd5;
            transform: scale(1.05);
        }
        .logo-image {
            border-radius: 8px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .logo-image:hover {
            transform: rotate(5deg) scale(1.1);
            box-shadow: 0 5px 15px rgba(0,255,213,0.4);
        }

        /* Navbar links */
        .navbar-nav .nav-item .nav-link {
            color: #ffffff;
            margin: 0 10px;
            font-weight: 500;
            position: relative;
            transition: all 0.3s ease;
        }
        .navbar-nav .nav-item .nav-link::after {
            content: "";
            position: absolute;
            width: 0%;
            height: 2px;
            left: 0;
            bottom: -2px;
            background: #00ffd5;
            transition: width 0.3s ease;
        }
        .navbar-nav .nav-item .nav-link:hover::after {
            width: 100%;
        }
        .navbar-nav .nav-item .nav-link:hover {
            color: #00ffd5;
            transform: scale(1.05);
        }

        /* Sign-out icon hover */
        .navbar-nav .nav-item .nav-link i {
            transition: transform 0.3s ease, color 0.3s ease;
        }
        .navbar-nav .nav-item .nav-link i:hover {
            color: #00ffd5;
            transform: scale(1.3) rotate(10deg);
        }

        /* Hamburger toggle button */
        .navbar-toggler {
            border-color: #00ffd5;
            transition: all 0.3s ease;
        }
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%280,255,213,1%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }

        /* Responsive adjustments */
        @media (max-width: 767px) {
            .navbar-nav {
                text-align: center;
            }
            .navbar-nav .nav-item {
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark header-back sticky-top">
    <a class="navbar-brand d-flex align-items-center" href="../index.php">
        <img src="../images/CDLU logo.png" class="logo-image" width="50" height="50">
        <h3 class="text-light text-uppercase ml-2">CHAUDHARY DEVI LAL UNIVERSITY</h3>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button> 
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="../index.php">HOME</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../academics.php">ACADEMICS</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../admission.php">ADMISSION</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../login/logout.php">
                    <i class="fa fa-sign-out text-white fa-lg" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>

<!-- Bootstrap JS -->
<script src="../bootstrap/js/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
