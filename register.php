<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <!-- Font Awasome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>

        .pass-div{
            position: relative;
        }
        .pass-div i{
            position: absolute;
            top: 32px;
            right:0;;
            width:35px;
            height: 37px;
            background-color:green;
            color:white;
            text-align:center;
            line-height:37px;
            border-top-right-radius:5px;
            border-bottom-right-radius:5px;
            cursor:pointer;
        }
    </style>
  </head>
  <!-- body section -->
  <body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-3">
                    <div class="card-header bg-success text-white">
                        <h3>Registration Form</h3>
                    </div>
                    <div class="card-body">
                        <?php if(isset($_SESSION['success'])){?>
                            <div class="alert alert-success"><?= $_SESSION['success']?></div>
                            <?php } unset($_SESSION['success'])?>

                        <?php if(isset($_SESSION['exist'])){?>
                            <div class="alert alert-danger"><?= $_SESSION['exist']?></div>
                            <?php } unset($_SESSION['exist'])?>
                                    <!-- Form section -->
                    <form action="register_post.php" method="POST">

                         <!-- Name section -->
                        <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input  name="name" type="text"  style="border-color:<?=(isset($_SESSION['name_err']) ? 'red':'')?>"; class="form-control" placeholder="Enter your Name" >
                                <?php if(isset($_SESSION['name_err'])){ ?>
                                    <strong class="text-danger"><?=$_SESSION['name_err']?> </strong>
                                <?php } unset($_SESSION['name_err']) ?>
                        </div>
                        <!-- Email section -->

                        <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input  name="email" type="email"  style="border-color:<?=(isset($_SESSION['eml_err']) ? 'red':'')?>"; class="form-control" placeholder="Enter your eamil" >
                                <?php if(isset($_SESSION['eml_err'])){ ?>
                                    <strong class="text-danger"><?=$_SESSION['eml_err']?> </strong>
                                <?php } unset($_SESSION['eml_err']) ?>
                        </div>
                                <!-- Password section -->

                        <div class="mb-3 pass-div" >
                                <label class="form-label">Password</label>
                                <input id="pass"  name="password" type="password"  style="border-color:<?=(isset($_SESSION['pass_err']) ? 'red':'')?>"; class="form-control" placeholder="Enter your Password" >
                                <?php if(isset($_SESSION['pass_err'])){ ?>
                                    <strong class="text-danger"><?=$_SESSION['pass_err']?> </strong>
                                <?php } unset($_SESSION['pass_err']) ?>
                               <i id='show_pass' class="fa fa-eye"></i>
                                </div>
                                    <!-- Gender section -->
                                
                            <div class="mb-3">
                            <label  class="form-label">Select Gender</label>
                          <div class="form-check">
                            <input class="form-check-input"   
                            type="radio" name="gender" id="gen1" value="male" >
                            <label class="form-check-label" for="gen1">
                            Male
                            </label>
                            </div>

                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gen2" value="feamle" >
                            <label class="form-check-label" for="gen2">
                            Feamle
                            </label>
                            </div>
                            <?php if (isset($_SESSION['gen_err'])) { ?>
                            <strong class=" text-danger"> <?php echo $_SESSION['gen_err'] ?></strong>
                                <?php }unset($_SESSION['gen_err'])?>
                            </div>

                            <!-- Submit section -->
                    <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" ></script>
    <script>
        $('#show_pass').click(function (){
     var pass= document.getElementById('pass');
        if(pass.type == 'password'){
            pass.type='text';
        }
        else{
            pass.type='password';
        }
    }) 
    </script>
    <!-- J query link -->
   
    <!-- Java script link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
  </body>
</html>