<?php
    session_start();
    include("../php/dbconn.php");



?>


<!DOCTYPE html>

<html>
    <head>
        <title>Login Linear</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="Login">
            <h1 class="title">
                LINEAR
            </h1>
            <div class="loginBox">
                <h1>
                    LOGIN
                    <form class="LoginInput" method="POST" action="../php/login.php">
                        <div class="form-group col w-100">
                            <label for="inputName">Email</label>
                            <input type="email" class="form-control full-width w-100" id="InputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email"
                            value="<?php echo isset($_SESSION['login_form_data']['email']) ? htmlspecialchars($_SESSION['login_form_data']['email']) : ''; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
                        </div>
                        <?php if (isset($_SESSION['login_errors'])): ?>
                        <div class="alert alert-danger">
                            <?php foreach ($_SESSION['login_errors'] as $error): ?>
                                <p><?php echo htmlspecialchars($error); ?></p>
                            <?php endforeach; ?>
                            <?php unset($_SESSION['login_errors']); ?>
                        </div>
                        <?php endif; ?>
                        <a onclick="ForgotPass()">Forgot Email or Password?</a>
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </form>
                </h1>
            </div>
            <div class="LoginToggle">
                <h1>
                    Welcome!
                </h1>
                <p>
                    Already have an account?
                </p>
                <button onclick="toggleLogin()">
                    LOGIN
                </button>
            </div>
        </div>
        <style>
            .title{
                font-size: 5rem;
                margin-bottom: 5%;
                color: white;
            }
            .Login{
                display: flex;
                background-color: #32cd32;
                height: 100vh;
                width: 75%;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                transition: all 0.3s ease;
            }
            .loginBox{
                margin-bottom: 5%;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                border-radius: 13px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.253);
                background-color: white;
                height: 25em;
                width: 18em;
            }
            .loginBox h1{
                font-size: 2.3rem;
                text-align: center;
            }
            .LoginInput{
                padding-top: 9%;
                align-items: left;
            }
            .LoginInput label{
                width: 100%;
                font-size: 1rem;
                text-align: left;
            }
            .LoginInput a{
                margin-top: 4%;
                display: block;
                font-size: 0.7rem;
                width: 100%;
                text-align: left;
                cursor: pointer;
            }
            .LoginInput button{
                margin-top: 10%;
            }
            .btn{
                background-color: #32cd32;
                border-color: #32cd32;
            }
            .btn:hover{
                transition: background-color 0.3s ease;
                background-color: #1b771b;
                border-color: white;
            }
            .btn:active{
                transition: background-color 0.3s ease, color 0.3s ease;
                background-color: white;
                color: #32cd32;
            }

            .Login.toggled{
                transition: all 0.3s ease;
                width: 30%;
            }
            .Login.toggled .loginBox{
                display: none;
            }
            .Login.toggled .title{
                display: none;
            }
            .LoginToggle{
                display: none;
            }
            .Login.toggled .LoginToggle{
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                flex-direction: column;
            }
            .Login.toggled .LoginToggle h1{
                padding-top: 7%;
                display: block;
                text-align: center;
                font-size: 3rem;
                color: white;
            }
            .Login.toggled .LoginToggle p{
                font-weight: 200;
                color: white;
            }
            .Login.toggled .LoginToggle button{
                margin: 2%;
                font-size: 1.2rem;
                text-decoration: none;
                background-color: #32cd32;
                border-color:  white;
                border-style: solid;
                border-width: 2px;
                padding: 6px 23px;
                border-radius: 8px;
                border-color: white;
                color: white;
                margin-top: 7%;
            }
            .Login.toggled .LoginToggle button:hover, button:active{
                background-color: white;
                color: black;
                border-color: #ffffff;
                transition: background-color 0.3s ease, color 0.3s;
            }
            .loginBox .alert-danger {
                margin-top: 10px;
                padding: 5px 10px;
                font-size: 0.8rem;
                max-height: 80px;
                overflow-y: auto;
            }
        </style>
        <div class="SignUp">
            <div class="SignUpToggle">
                <h1>
                    Welcome Back!
                </h1>
                <p>
                    Don't have an account yet?
                </p>
                <button onclick="toggleLogin()">
                    SIGN UP
                </button>
            </div>
            <h1 class="SignUptitle">
                LINEAR
            </h1>
            <div class="signupBox">
                <h1>
                    SIGNUP
                </h1>
                    <form class="SignUpInput" method="POST" action="../php/signup.php">
                        <div class="form-group col w-100">
                            <label for="inputName">First Name</label>
                            <input type="text" class="form-control full-width w-100" id="InputEmail1" aria-describedby="emailHelp" placeholder="First Name" name="firstName"
                            value = "<?php echo isset($_SESSION['signup_form_data']['firstName']) ? htmlspecialchars($_SESSION['signup_form_data']['firstName']) : ''; ?>" required>
                        </div>
                        <div class="form-group col w-100">
                            <label for="inputName">Last Name</label>
                            <input type="text" class="form-control full-width w-100" id="InputEmail1" aria-describedby="emailHelp" placeholder="Last Name" name="lastName"
                            value="<?php echo isset($_SESSION['signup_form_data']['lastName']) ? htmlspecialchars($_SESSION['signup_form_data']['lastName']) : ''; ?>" required>
                        </div>
                        <div class="form-group col w-100">
                            <label for="inputName">Email</label>
                            <input type="email" class="form-control full-width w-100" id="InputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email"
                            value="<?php echo isset($_SESSION['signup_form_data']['email']) ? htmlspecialchars($_SESSION['signup_form_data']['email']) : ''; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="termsCheck" required>
                            <label class="form-check-label" for="exampleCheck1" style="display: inline-block; font-size: 0.8rem; width:auto;">Agree with the</label>
                            <a href="https://www.youtube.com/watch?v=KkGVmN68ByU&pp=ygUXcGxlYXNlIGhhdmUgbWVyY3kgb24gbWU%3D" style="font-size: 0.8rem; display:inline-block; width:auto;">Terms and Conditions?
                            </a>
                          </div>
                          <?php if (isset($_SESSION['signup_errors'])): ?>
                                <div class="alert alert-danger">
                                <?php foreach ($_SESSION['signup_errors'] as $error): ?>
                                <p><?php echo $error; ?></p>
                                <?php endforeach; ?>
                                <?php unset($_SESSION['signup_errors']); ?>
                            </div>
                    <?php endif; ?>
                        <button type="submit" class="btn btn-primary buton">SIGNUP</button>
                    </form>
            </div>
        </div>
            <style>
                .SignUp{
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    width: 30%;
                    flex-direction: column;
                    transition: all 0.3s ease;
                }
                .SignUpToggle{
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    width: 100%;
                    flex-direction: column;
                }
                .SignUpToggle h1{
                    padding-top: 7%;
                    display: block;
                    text-align: center;
                    font-size: 3rem;
                }
                .SignUpToggle p{
                    font-weight: 200;
                }
                .SignUpToggle button{
                    margin: 2%;
                    font-size: 1.2rem;
                    text-decoration: none;
                    background-color: white;
                    border-color: black;
                    border-style: solid;
                    border-width: 2px;
                    padding: 6px 23px;
                    border-radius: 8px;
                    border-color: #32cd32;
                    color: black;
                    margin-top: 7%;
                }
                .SignUpToggle button:hover, button:active{
                    background-color: #1b771b;
                    color: white;
                    border-color: white;
                    transition: background-color 0.3s ease, color 0.3s;
                }
                .SignUp.toggled{
                    width: 70%;
                }
                .SignUp.toggled .SignUpToggle{
                    display: none;
                }
                .signupBox{
                    display: none;
                }
                .SignUptitle{
                    display: none;
                }
                .SignUp.toggled .SignUptitle{
                    display: block;
                    font-size: 5rem;
                    margin-bottom: 3%;
                    color: #1b771b;
                }
                .SignUp.toggled .signupBox{
                    margin-bottom: 5%;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                    border-radius: 13px;
                    box-shadow: 0 0 20px rgba(0, 0, 0, 0.253);
                    background-color: white;
                    height: 32em;
                    width: 28em;
                }
                .SignUp.toggled .signupBox h1{
                    font-size: 2.3rem;
                    text-align: center;
                }
                .SignUp.toggled .SignUpInput{
                    padding-top: 3%;
                    display: flex;
                    gap: 11px;
                    flex-direction: column;
                }
                .SignUp.toggled .SignUpInput .form-control{
                    display: inline-block;
                }
                .SignUp.toggled .SignUpInput label{
                    width: 100%;
                    font-size: 1rem;
                    text-align: left;
                }
                .SignUp.toggled .SignUpInput a{
                    margin-top: 4%;
                    display: block;
                    font-size: 0.7rem;
                    width: 100%;
                    text-align: left;
                    cursor: pointer;
                }
                .SignUp.toggled .SignUpInput button{
                    margin-top: 10%;
                }
                .SignUp.toggled .SignUpInput .buton{
                    width: 97px !important;
                    margin: 0 auto;
                    display: block;
                }
                .SignUp.toggled .SignUpInput .btn{
                    background-color: #32cd32;
                    border-color: #32cd32;
                }
                .SignUp.toggled .btn:hover{
                    transition: background-color 0.3s ease;
                    background-color: #1b771b;
                    border-color: white;
                }
                .SignUp.toggled .btn:active{
                    transition: background-color 0.3s ease, color 0.3s ease;
                    background-color: white;
                    color: #32cd32;
                }
                .SignUp.toggled .form-check{
                    display: flex !important;
                    align-items: center;
                }
                .SignUp.toggled .form-check-label{
                    margin-left: 12px;
                    margin-right: 5px;
                }
                .SignUp.toggled .form-check-label, .SignUp.toggled .form-check a{
                    margin-top: 2px;
                }
                .SignUp.toggled .signupBox .alert-danger {
                    position: absolute;
                    bottom: 20px;
                    left: 50%;
                    transform: translateX(-50%);
                    width: 80%;
                    max-height: 100px;
                    overflow-y: auto;
                    margin: 0;
                    padding: 10px;
                    font-size: 0.8rem;
                }
    
                .SignUp.toggled .signupBox {
                    position: relative;
                    padding-bottom: 120px; 
                }
        </style>
        <style>
            *{
                font-family: "Lexend", sans-serif;
            }
            body{
                display: flex;
            }
        </style>
        <script>
            function toggleLogin(){
            const login  = document.querySelector('.Login');
            const signup = document.querySelector('.SignUp');
            if(login.classList.contains('toggled') || signup.classList.contains('toggled')){
                login.classList.remove('toggled');
                signup.classList.remove('toggled');
            } else {
                login.classList.add('toggled');
                signup.classList.add('toggled');
            }
        }

        function ForgotPass(){
            alert("BOOHOO!   :P\nContact: 09173292405     for password change");

        }
        </script>
    </body>
</html>