<?php session_start();?>
<!DOCTYPE html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    <style>
    :root {
        /* COLORS */
        --white: #e9e9e9;
        --gray: #333;
        --blue: #0367a6;
        --lightblue: #008997;
        --brown: #F7971E;
        --golden: #FFD200;
        --light: #ffeeee;

        /* RADII */
        --button-radius: 0.7rem;

        /* SIZES */
        --max-width: 980px; /*origSize = 758px*/
        --max-height: 620px; /*origSize = 420px*/

        font-size: 16px;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
            Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
    }

    body {
        align-items: center;
        background-color: var(--white);
        background: url("/web2/images/bg3.jpg");
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        display: grid;
        height: 100vh;
        place-items: center;
    }
    .overlayer {
            position: absolute;
            left: 0;
            top: 0;
            background-color: rgba(0, 0, 0, .5);
            height: 100%;
            width: 100%;
            -webkit-backdrop-filter: blur(5px);
            backdrop-filter: blur(5px);
            transition: all 2s;
  
            z-index: -1;
            }

    .form__title {
        font-weight: 300;
        margin: 0;
        margin-bottom: 1.25rem;
    }

    .link {
        color: var(--gray);
        font-size: 0.9rem;
        margin: 1.5rem 0;
        text-decoration: none;
    }

    .container {
        background-color: var(--light);
        border-radius: var(--button-radius);
        box-shadow: 0 0.9rem 1.7rem rgba(0, 0, 0, 0.25),
            0 0.7rem 0.7rem rgba(0, 0, 0, 0.22);
        height: var(--max-height);
        max-width: var(--max-width);
        overflow: hidden;
        position: relative;
        width: 100%;
    }

    .container__form {
        height: 100%;
        position: absolute;
        top: 0;
        transition: all 0.6s ease-in-out;
    }

    .container--signin {
        left: 0;
        width: 50%;
        z-index: 2;
    }

    .container.right-panel-active .container--signin {
        transform: translateX(100%);
    }

    .container--signup {
        left: 0;
        opacity: 0;
        width: 50%;
        z-index: 1;
    }

    .container.right-panel-active .container--signup {
        animation: show 0.6s;
        opacity: 1;
        transform: translateX(100%);
        z-index: 5;
    }

    .container__overlay {
        height: 100%;
        left: 50%;
        overflow: hidden;
        position: absolute;
        top: 0;
        transition: transform 0.6s ease-in-out;
        width: 50%;
        z-index: 100;
    }

    .container.right-panel-active .container__overlay {
        transform: translateX(-100%);
    }

    .overlay {
        background-color: var(--lightblue);
        background: linear-gradient(to right, rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url("/web2/images/formBG.png");
        background-attachment: fixed;
        background-position: left;
        background-repeat: repeat;
        background-size: 50%;
        height: 100%;
        left: -100%;
        position: relative;
        transform: translateX(0);
        transition: transform 0.6s ease-in-out;
        width: 200%;
    }

    .container.right-panel-active .overlay {
        transform: translateX(50%);
    }

    .overlay__panel {
        align-items: center;
        display: flex;
        flex-direction: column;
        height: 100%;
        justify-content: center;
        position: absolute;
        text-align: center;
        top: 0;
        transform: translateX(0);
        transition: transform 0.6s ease-in-out;
        width: 50%;
    }

    .overlay--left {
        transform: translateX(-20%);
    }

    .container.right-panel-active .overlay--left {
        transform: translateX(0);
    }

    .overlay--right {
        right: 0;
        transform: translateX(0);
    }

    .container.right-panel-active .overlay--right {
        transform: translateX(20%);
    }

    .btn {
        background-color: var(--brown);
        background-image: linear-gradient(90deg, var(--brown) 0%, var(--golden) 85%);
        border-radius: 20px;
        border: 1px solid var(--golden);
        color: var(--white);
        cursor: pointer;
        font-size: 0.8rem;
        font-weight: bold;
        letter-spacing: 0.1rem;
        padding: 0.9rem 4rem;
        text-transform: uppercase;
        transition: transform 80ms ease-in;
    }

    .form > .btn {
        margin-top: 1.5rem;
    }

    .btn:active {
        transform: scale(0.95);
    }

    .btn:focus {
        outline: none;
    }

    .form {
        background-color: var(--white);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 3rem;
        height: 100%;
        text-align: center;
    }

    .input {
        background-color: #fff;
        border: none;
        padding: 0.9rem 0.9rem;
        margin: 0.5rem 0;
        width: 100%;
    }
    .form2{
        flex-flow: row wrap;
        
    }

    @keyframes show {
        0%,
        49.99% {
            opacity: 0;
            z-index: 1;
        }

        50%,
        100% {
            opacity: 1;
            z-index: 5;
        }
    }
    </style>
</head>
    <body>
        <div class="overlayer"></div>
            <div class="container right-panel-active">
                <!-- Sign Up -->
                <div class="container__form container--signup">
                    <form method="post" action="signupquery.php" class="form" id="form1">
                        <h2 class="form__title">SIGN UP</h2>
                            <input type="text" id="fname" class="input" name="fname" placeholder="First Name" style=""/>
                            <input type="text" id="lname" class="input" name="lname" placeholder="Last Name"  style=""/>
                            <input type="text" id="address" class="input" name="address" placeholder="Address"/>
                            <input type="email" id="email" class="input" name="email" placeholder="Email"/>
                            <input type="text" id="username" class="input" name="username" placeholder="Username"/>
                            <input type="password" id="password" class="input" name="password" placeholder="Password"/>
                        <button type="submit" class="btn" id="signup" name="">Sign Up</button>
                    </form>
                </div>
            
                <!-- Sign In -->
                <div class="container__form container--signin">
                    <form method="post" action="loginquery.php" class="form" id="form2">
                        <h2 class="form__title">LOG IN</h2>
                        <input type="text" placeholder="Username" class="input" id="username" name="username"/>
                        <input type="password" placeholder="Password" class="input" id="password" name="password"/>
                        <a href="#" class="link">Forgot your password?</a>
                        <button type="submit" class="btn" id="login" name="loginsubmit">Log in</button>
                    </form>
                </div>

                
            
                <!-- Overlay -->
                <div class="container__overlay">
                    <div class="overlay">
                        <div class="overlay__panel overlay--left">
                            <button class="btn" id="signIn">LOG IN <i class="bi bi-box-arrow-in-right" style="font-size: 1.2rem;"></i></button>
                        </div>
                        <div class="overlay__panel overlay--right">
                            <button class="btn" id="signUp">Sign Up <i class="bi bi-person-fill-add" style="font-size: 1.2rem;"></i></button>
                        </div>
                    </div>
                </div>
            </div>


        <script>
            const signInBtn = document.getElementById("signIn");
            const signUpBtn = document.getElementById("signUp");
            const fistForm = document.getElementById("form1");
            const secondForm = document.getElementById("form2");
            const container = document.querySelector(".container");

            signInBtn.addEventListener("click", () => {
                container.classList.remove("right-panel-active");
            });

            signUpBtn.addEventListener("click", () => {
                container.classList.add("right-panel-active");
            });

            // fistForm.addEventListener("submit", (e) => e.preventDefault());
            // secondForm.addEventListener("submit", (e) => e.preventDefault());
            
            $(function(){
                $("#signup").click(function(){
                    location.href = "LogIn.php";
                });

                $('#login').click(function(){
                    $.post("loginquery.php",{
                        "username": $("#username").val(),
                        "password": $("#password").val()
                    },
                    function(data, Status){
                        console.log(data);
                        location.href="admin.php";
                    });
                });
            });
        </script>
    </body>
</html>