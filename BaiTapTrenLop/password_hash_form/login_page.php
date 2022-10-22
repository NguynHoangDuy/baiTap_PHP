<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login form</title>
    <link rel="stylesheet" href="./css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
</head>
<body>
<style>
        .err-desc {
            position: absolute;
            bottom: -30px;
            left: 0px;
            color: red;
        }
    </style>
<?php
    include("./connection.php");
    if(!$conn){
        die("Connection failed: ". mysqli_connect_error());
    }

    $query = "SELECT `email`,`password` FROM `user` ";
    $listEmail = [];
    $listPass = [];
    $result = mysqli_query($conn, $query);
    if($result)
    if(mysqli_num_rows($result)!= 0)
    {
        $i=0;
        while($rows = mysqli_fetch_array($result))
        {
            $listEmail[$i] = $rows["email"] ;
            $listPass[$i] = $rows["password"] ;
            $i++;
        }
    }

    function check($email, $pass, $listEmail, $listPass){
        foreach ($listEmail as $key => $value) {
            if($email === $value)
                if(password_verify($pass, $listPass[$key]))
                    return "";
                else return "Sai email hoặc sai mật khẩu";
        }
        return "Sai email hoặc sai mật khẩu";
    }
    if(isset($_POST['submit']))
    {
        $pass = $_POST['pass'];
        $email = $_POST['email'];

        $err = check($email, $pass, $listEmail, $listPass);
        if($err == "")
        { 
            session_start();
            $_SESSION["email"] = $email;
            session_write_close();
            header("Location: ./login_successful.php");
        }
    }
?>
<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                     class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form method="post" action="">
                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                        <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                        <button type="button" class="btn btn-primary btn-floating mx-1">
                            <i class="fab fa-facebook-f"></i>
                        </button>

                        <button type="button" class="btn btn-primary btn-floating mx-1">
                            <i class="fab fa-twitter"></i>
                        </button>

                        <button type="button" class="btn btn-primary btn-floating mx-1">
                            <i class="fab fa-linkedin-in"></i>
                        </button>
                    </div>

                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0">Or</p>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4" style ="position: relative;">
                        <input type="email" id="form3Example3" class="form-control form-control-lg"
                               placeholder="Enter a valid email address" name="email"/>
                        <label class="form-label" for="form3Example3" >Email address</label>
                        <div class="err-desc"><?php
                                            if(isset($err)) echo "<p>$err</p>"; echo "";?>
                                        </div>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3" style ="position: relative;">
                        <input type="password" id="form3Example4" class="form-control form-control-lg"
                               placeholder="Enter password" name="pass"/>
                        <label class="form-label" for="form3Example4">Password</label>
                        <div class="err-desc"><?php
                                            if(isset($err)) echo "<p>$err</p>"; echo "";?>
                                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Checkbox -->
                        <div class="form-check mb-0">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                            <label class="form-check-label" for="form2Example3">
                                Remember me
                            </label>
                        </div>
                        <a href="#!" class="text-body">Forgot password?</a>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;" name="submit">Login</button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="./registration.php"
                                                                                          class="link-danger">Register</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div
        class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
        <!-- Copyright -->
        <div class="text-white mb-3 mb-md-0">
            Copyright © 2020. All rights reserved.
        </div>
        <!-- Copyright -->

        <!-- Right -->
        <div>
            <a href="#!" class="text-white me-4">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#!" class="text-white me-4">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#!" class="text-white me-4">
                <i class="fab fa-google"></i>
            </a>
            <a href="#!" class="text-white">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
        <!-- Right -->
    </div>
</section>
</body>
</html>
