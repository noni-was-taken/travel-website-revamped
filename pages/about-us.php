<?php
session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Linear!</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Linear</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about-us.php">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallery.php">GALLERY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact-us.php">CONTACT US</a>
                        </li>
                            <li class="nav-item dropdown">
                        <?php if (isset($_SESSION['user_id'])): ?>
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            HI, <?php echo htmlspecialchars($_SESSION['first_name']); ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../php/logout.php">Logout</a></li>
                        </ul>
                    <?php else: ?>
                        <a class="nav-link" href="login-signup.php">LOGIN</a>
                    <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
            
            <div class="container-fluid">
                <div class="row layer-one h-100 align-items-end">
                    <div class="col-xl-6 l1-h-container h-100 d-flex align-items-center justify-content-center"> 
                        <h1 class="display-1 text-center text-white pb-4">We are Linear.</h1>
                    </div>
                    <div class="col-xl-6 l1-i-container p-0">
                        <img src="../image/team.png" alt="teamImage" class="img-fluid w-100">
                    </div>
                </div>
            </div>
            <div class="container-fluid layer-two py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h1 class="11-lead display-3 mb-4 ">
                            What is Linear?
                        </h1>
                        <p class="lead">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Donec interdum blandit nibh quis congue. Proin facilisis <br>
                            scelerisque ante, sed sodales odio pretium ac. Vivamus <br>
                            lobortis ex nec orci ultrices bibendum.
                            <br>
                            <br>
                            Fusce nisi sapien, tristique sed erat at, commodo suscipit leo. Pellentesque sit.
                            Donec interdum blandit nibh quis congue. Proin facilisis <br>
                            scelerisque ante, sed sodales odio pretium ac. Vivamus <br>
                            In vehicula suscipit ligula vitae varius..  
                            
                        </p>
                    </div>
                </div>
            </div>
            <div class="container-fluid layer-three py-0">
                <div class="row h-100">
                    <div class="col-lg-6 l3-mission-container d-flex flex-column align-items-center justify-content-center py5">
                        <h1 class="display-4 mb-2">
                            Mission
                        </h1>
                        <p class="text-center lead">
                            Donec convallis viverra purus. 
                            Donec dignissim ante at lacus sollicitudin,
                            egestas ullamcorper lectus efficitur. Fusce
                            et mattis ipsum, eget laoreet mi. Aenean
                            condimentum sit amet.
                            Praesent finibus gravida velit. Duis
                            id semper arcu. Curabitur maximus enim
                            arcu, dignissim semper turpis vulputate non. Aenean placerat ex vestibulum fringilla pretium. Nunc fermentum.
                        </p>
                    </div>
                    <div class="col-lg-6 l3-vision-container d-flex flex-column align-items-center justify-content-center py-5">
                        <h1 class="display-4 mb-2">
                            Vision
                        </h1>
                        <p class="text-center lead">
                            Lorem ipsum dolor sit amet, <br>
                            consectetur adipiscing elit. <br>
                            Sed lorem neque, commodo vel erat sed, <br>
                            porttitor gravida arcu. Ut eu.
                        </p>
                    </div>
                </div>
            </div>
            <h1 class="text-center display-3 my-5">
                MEET THE TEAM
            </h1>
            <div class="container-fluid layer-four py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-4 text-center mb-4">
                        <img src="../image/dwayney.webp" alt="rock" class="img-fluid rounded-circle mb-3" style="width: 200px; height: 200px;">
                        <h2 class="h3">Dwayne Kouske</h2>
                        <p class="lead">Lead Designer</p>
                    </div>
                    <div class="col-lg-4 text-center mb-4">
                        <img src="../image/cena.webp" alt="cena" class="img-fluid rounded-circle mb-3" style="width: 200px; height: 200px;">
                        <h2 class="h3">John (Galvanized Iron) Cena</h2>
                        <p class="lead">Co-Lead Designer</p>
                    </div>
                    <div class="col-lg-4 text-center mb-4">
                        <img src="../image/travis.jpg" alt="travis" class="img-fluid rounded-circle mb-3" style="width: 200px; height: 200px;">
                        <h2 class="h3">Desiigner "Panda" Designer</h2>
                        <p class="lead">Mr. Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-mg-12 col-xs-12 footer">
                <p class="lead">&copy; 2025 LINEAR All rights reserved.</p>
            </div>
                <style>
                    .footer{
                        background-color: black;
                        height: 5vh;
                        text-align: center;
                    }
                    .footer p{
                        color: #FFFFFF;
                        font-size: 2vh;
                    }
                </style>
            <style>
                * {
                    font-family: "Lexend", sans-serif;
                }
                h1{
                    font-weight: 500 !important;
                }
                .navbar {
                    background-color: #32cd32;
                    height: 80px;
                    padding: 0 20px;
                }
                .navbar-brand {
                    font-size: 1.8rem;
                    font-weight: bold;
                }
                .navbar-nav .nav-link {
                    font-size: 1.3rem;
                    padding: 10px 20px;
                    margin: 0 5px;
                    color: white !important; 
                    opacity: 1 !important;
                }
                .navbar-nav .nav-link:hover{
                    background-color: #1d741d;
                    transition: background-color 0.3s ease;
                }
                .navbar-toggler {
                    font-size: 1.5rem;
                }
        
                .navbar-collapse {
                    background-color: #32cd32;
                }
                .layer-one {
                    background-color: #333333;
                }
                .layer-two {
                    background-color: #f8f9fa;
                }
                .layer-three {
                    background-color: #333333;
                }
                .l3-mission-container {
                    background-color: #ffa500;
                }
                .l3-vision-container {
                    background-color: #1e90ff;
                }
                .layer-four {
                    background-color: #32cd32;
                }
            </style>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>