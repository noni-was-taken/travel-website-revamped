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

        <div class="col-12 picture-container">
            <img class="img-fluid home-picture" src="../image/beach.jpg">
        </div>

        <style>
            .picture-container{
                height: 70vh;
                width: auto;
                overflow: hidden;
                position: relative;
            }
            .home-picture{
                width: 100%;
                height: 100%;
                object-fit: cover;
                object-position: 20% 20%;
            }
        </style>

        <div class="col-xl-6 col-mg-6 col-xs-6 about-container">
            <h1 class="display-1">Welcome to Linear!</h1>
            <p  class="fs-3 text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam ex corrupti assumenda cupiditate ullam id, cum iusto tempore aperiam perferendis. Consectetur sit laborum exercitationem tempore eveniet earum repellat illo aliquam!</p>
        </div>

        <style>
            .about-container{
                margin: auto;
                background-color: #ffa500;
                height: 50vh;
                text-align: center;
                padding: 20px;
                box-sizing: border-box;
                overflow: auto;
                word-wrap: break-word   ;
            }
            .about-container h1, .about-container p{
                margin: 0;
                padding: 10px 0;
            }
        </style>

        <div class="col-xl-6 col-mg-6 col-xs-6 home-gallery-container">
            <h1 style="text-align: center; font-size: 7vh;">Gallery</h1>
            <div class="home-content-wrapper">
            <div class="col-xl-5 col-mg-5 col-xs-5 home-pictures">
                <img src="../image/placeholder.jpg">
                <img src="../image/placeholder.jpg">
                <img src="../image/placeholder.jpg">
            </div>
               <div class="col-xl-6 col-mg-6 col-xs-6  home-pictures-captions">
                    <div class="caption">
                        <h1>Title</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis ipsum corporis excepturi amet repellendus est recusandae rem corrupti, laborum dolore quibusdam magnam quae ex fugiat cum. Dicta corrupti esse nihil?</p>
                    </div>
                    <div class="caption">
                        <h1>Title</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis ipsum corporis excepturi amet repellendus est recusandae rem corrupti, laborum dolore quibusdam magnam quae ex fugiat cum. Dicta corrupti esse nihil?</p>
                    </div>
                    <div class="caption">
                        <h1>Title</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis ipsum corporis excepturi amet repellendus est recusandae rem corrupti, laborum dolore quibusdam magnam quae ex fugiat cum. Dicta corrupti esse nihil?</p>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .home-gallery-container{
                background-color: #1e90ff;
                margin: auto;
                height: 90vh;
                overflow: auto;
            }
            .home-content-wrapper {
                display: flex;
                justify-content: space-between;
                align-items: flex-start;
                padding: 0 10%;
            }
            .home-pictures{
                height: 80vh;
                margin-top: 0%;
                display: flex;
                flex-direction: column;
                justify-content: space-evenly;
                margin-left: 0%;
            }
            .home-pictures img{
                width: 80%;
                height: auto;
                margin: auto;
            }
            .home-pictures-captions{
                height: 80vh;
                margin-top: 0%;
                display: flex;
                flex-direction: column;
                justify-content: space-evenly;
            }
            .caption{
                padding: 5px;
            }
            .caption h1{
                font-size: 5vh;
            }
            .caption p{
                font-size: 1em;
            }
        </style>
    
    <div class="col-xl-12 col-mg-12 col-xs-12 service-container">
        <h1 style="text-align: center; font-size: 7vh;">Services</h1>
        <div class="col-xl-12 col-mg-12 col-xs-12 services-parent">
            <div class="col-xl-3 col-mg-3 col-xs-3 services">
                <img src="../image/themepark.jpg">
                <h2 class="h2">Title</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis corporis obcaecati modi pariatur, fuga quos! Quae animi deleniti corporis facilis eaque, illum nisi. Officiis qui impedit, fugit unde rerum iusto!</p> 
            </div>
            <div class="col-xl-3 col-mg-3 col-xs-3 services">
                <img src="../image/tour.jpg">
                <h2 class="h2">Title</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis corporis obcaecati modi pariatur, fuga quos! Quae animi deleniti corporis facilis eaque, illum nisi. Officiis qui impedit, fugit unde rerum iusto!</p>
            </div>
            <div class="col-xl-3 col-mg-3 col-xs-3 services">
                <img src="../image/City.jpg">
                <h2 class="h2">Title</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis corporis obcaecati modi pariatur, fuga quos! Quae animi deleniti corporis facilis eaque, illum nisi. Officiis qui impedit, fugit unde rerum iusto!</p>
            </div>
        </div>
    </div>

    <style>
        .service-container{
            background-color: #ff746c;
            height: 70vh;
        }
        .services-parent{
            height: 50vh;
            display: flex;
            justify-content: space-around;
        }
        .services{
            display: flex;
            flex-direction: column;
            text-align: center;
        }
        .services img{
            width: 80%;
            height: auto;
            margin: auto;
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
            }
            .footer p{
                color: #FFFFFF;
                font-size: 2vh;
            }
        </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>