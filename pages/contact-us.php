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
        
        <div class="m-0 row layer-1 justify-content-center w-100">
            <div class="col-xl-4 d-flex flex-column justify-content-center infoCat py-5">
                <h1 class="ps-3 display-1">We want to hear from you!</h1>
                <p class="ps-4 pe-5 lead">
                    Aenean ut urna ullamcorper, blandit eros vel, condimentum elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis id urna.
                </p>
                <small class="font-weight-light ps-5">
                    Email: example@email.com | (33+) 5732 - 932
                </small>
            </div>
            <div class="col-xl-4 d-flex align-items-center inputCat">
                <form class="w-100 px-2">
                    <div class="form-group col w-100">
                        <label for="inputName">Full Name</label>
                        <input type="fullname" class="form-control full-width w-100" id="InputEmail1" aria-describedby="emailHelp" placeholder="Name">
                    </div>
                    <div class="form-group col w-100">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control full-width w-100" id="InputEmail1" aria-describedby="emailHelp" placeholder="Email">
                        <small type="emailHelp" class="form-text text-muted">Your email will remain confidential to anybody else.</small>
                    </div>
                    <div class="form-group col w-100">
                        <label for="message">Message</label><br>
                        <textarea class="w-100 rounded border-0 ps-2 pt-1 responsive-textarea" rows="5" placeholder="What do you want to say?"></textarea>
                    </div>
                    <div class="form-group col w-100">

                    </div>
                </form>
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
                color: #333333;
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
            
            .layer-1 {
                background-color: #ffd700;
                height: 88.3vh;
            }
            .inputCat {
                padding: 14px; 
            }
            .responsive-textarea {
                height: 150px;
                min-height: 100px;
                resize: vertical;
            }
        </style>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>