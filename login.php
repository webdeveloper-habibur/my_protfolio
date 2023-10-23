<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login Page</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/deadlock/admin_asset/images/favicon.png">
    <link href="/deadlock/admin_asset/css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html"><img src="/deadlock/admin_asset/images/logo-full.png" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4 text-white">Sign in your account</h4>
                                    <form action="login_post.php" method="POST">

                                         <?php if(isset($_SESSION['login_korca'])){?>
                            <div class="alert alert-success"><?= $_SESSION['login_korca']?></div>
                            <?php } unset($_SESSION['login_korca'])?>

                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Email</strong></label>
                                            <input name='email' type="email" class="form-control" value="hello@example.com">
                                            <?php if(isset($_SESSION['invalid'])){ ?>
                                    <strong class="text-danger"><?=$_SESSION['invalid']?> </strong>
                                <?php } unset($_SESSION['invalid']) ?>
                                        </div>
                                        <div class="form-group">
                                        <label class="mb-1 text-white"><strong>Password</strong></label>
                                <input id="pass"  name="password" type="password"  style="border-color:<?=(isset($_SESSION['wrong']) ? 'red':'')?>"; class="form-control" placeholder="Enter your Password" >
                                <?php if(isset($_SESSION['wrong'])){ ?>
                                    <strong class="text-danger"><?=$_SESSION['wrong']?> </strong>
                                <?php } unset($_SESSION['wrong']) ?>
                        </div>
                                        
                                
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-white text-primary btn-block">Sign Me In</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p class="text-white">Don't have an account? <a class="text-white" href="register.php">Sign up</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="./js/custom.min.js"></script>
    <script src="./js/deznav-init.js"></script>

</body>

</html>















<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-3">
                    <div class="card-header bg-success">
                        <h3>Login</h3>
                    </div>
                    <div class="card-body">

                <!-- Form section -->
                    <form action="login_post.php" method="POST">
                    <?php if(isset($_SESSION['login_korca'])){?>
                            <div class="alert alert-success"><?= $_SESSION['login_korca']?></div>
                            <?php } unset($_SESSION['login_korca'])?>

                        <!-- Email section -->
                        <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input  name="email" type="email"  style="border-color:<?=(isset($_SESSION['invalid']) ? 'red':'')?>"; class="form-control" placeholder="Enter your eamil" >
                                <?php if(isset($_SESSION['invalid'])){ ?>
                                    <strong class="text-danger"><?=$_SESSION['invalid']?> </strong>
                                <?php } unset($_SESSION['invalid']) ?>
                        </div>
                        <!--Password section -->
                        <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input id="pass"  name="password" type="password"  style="border-color:<?=(isset($_SESSION['wrong']) ? 'red':'')?>"; class="form-control" placeholder="Enter your Password" >
                                <?php if(isset($_SESSION['wrong'])){ ?>
                                    <strong class="text-danger"><?=$_SESSION['wrong']?> </strong>
                                <?php } unset($_SESSION['wrong']) ?>
                        </div>
                        <!-- Submit section -->
                    <button type="submit" class="btn btn-success">Login</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html> -->