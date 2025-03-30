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



        <style>
            p, h1, h2, h3, a{
                font-family: "Lexend", sans-serif
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
        </style>

<div class="col-xl-8 col-md-8 col-xs-8 carousel-container">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../image/gallery1.jpeg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Title for Slide 1</h5>
                    <p>Caption for Slide 1.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../image/gallery2.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Title for Slide 2</h5>
                    <p>Caption for Slide 2.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../image/gallery3.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Title for Slide 3</h5>
                    <p>Caption for Slide 3.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../image/gallery4.jpg" alt="Fourth slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Title for Slide 4</h5>
                    <p>Caption for Slide 4.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../image/gallery5.jpeg" alt="Fifth slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Title for Slide 5</h5>
                    <p>Caption for Slide 5.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../image/gallery6.jpeg" alt="Sixth slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Title for Slide 6</h5>
                    <p>Caption for Slide 6.</p>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

        <style>
            .carousel-container{
                height: 60vh;
                margin: auto;
                margin-top: 5vh;
            }
            h5, p{
                font-weight: bold;
                text-shadow: -1px -1px 0 #000,1px -1px 0 #000, -1px  1px 0 #000, 1px  1px 0 #000;
            }
        </style>

    <div class="col-xl-12 col-mg-12 col-xs-12 footer">
        <p>&copy; 2025 LINEAR. All rights reserved.</p>
    </div>
    <style>
        .footer{
            background-color: black;
            height: 5vh;
            text-align: center;
            margin-top: 22vh;
        }
        .footer p{
            color: #FFFFFF;
            font-size: 2vh;
        }
    </style>

          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>