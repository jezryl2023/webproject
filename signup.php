<!DOCTYPE html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="">
        <title></title>
        <style>
            body{
                background: url(images/bg3.jpg);
                background-size: cover;
            }
            .container{
                max-width: 700px;
                background: linear-gradient(to right bottom, #D8896B, #FFFFFF);
                margin-top: 8.9%;
                padding: 20px 20px 20px 20px;
            }
            h2{
                font-family: 'Abril Fatface', serif;
                font-size: 3rem;
                text-align: center;
                padding: 25px 0;
            }
            .form-control{
                
            }
        </style>
    </head>
    <body>
        <div class="container" style="">
        <h2 class="mt-0 pt-4">Sign Up Form</h2>
            <form method="post" action="signupquery.php">   
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <input type="text" id="fname" class="form-control" name="fname" placeholder="First Name"/>
                    </div>
                </div>
                    <div class="col">
                        <div class="form-outline">
                        <input type="text" id="lname" class="form-control" name="lname" placeholder="Last Name"/>
                        </div>
                    </div>
            </div>

            <!-- Text input -->
            <div class="form-outline mb-4">
                <input type="text" id="address" class="form-control" name="address" placeholder="Address"/> 
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="email" class="form-control" name="email" placeholder="Email"/>
            </div>

            <!-- Number input -->
            <div class="form-outline mb-4">
                <input type="text" id="username" class="form-control" name="username" placeholder="Username"/>
            </div>

            <!-- Number input -->
            <div class="form-outline mb-4">
                <input type="password" id="password" class="form-control" name="password" placeholder="Password"/>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4" name="" id="signup">Sign Up</button>
            </form>
        </div>

            <!-- <script>
                $(function(){
                $("#signup").click(){
                    if()
                } 
                });
            </script> -->

            <script>
                $(function(){
                $("#signup").click(){
                    window.location.replace = "http://localhost/web2/prodlist.php";
                } 
                });
            </script>
    </body>
</html>