<?php
session_start();
error_reporting(0);


    include("include/connection.php");
    if($_SESSION['super_email']==TRUE)
{
	header("Location: dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-sidenav-color="light" data-sidenav-user="true">

<head>
        <meta charset="utf-8" />
        <title>Admin Portal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        
        <!-- Theme Config Js -->
        <script src="assets/js/hyper-config.js"></script>

        <!-- Icons css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="assets/css/app-modern.min.css" rel="stylesheet" type="text/css" id="app-style" />
    </head>
    
    <body class="authentication-bg">
        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
                        <div class="card">

                            <!-- Logo -->
                            <div class="card-header pt-4 pb-4 text-center bg-primary">
                                <a href="index.php">
                                    <span>
                                        <!--<img src="assets/images/logo.png" alt="logo" height="22">-->
                                        <h3 style="color: white;">FPO Super Admin Portal</h3>
                                        </span>
                                </a>
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center pb-0 fw-bold">Sign In</h4>
                                    <p class="text-muted mb-4">Enter your email address and password to access admin panel.</p>
                                </div>

                                <form method="POST">

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Email address</label>
                                        <input class="form-control" type="email" name="super_email" id="emailaddress" required="" placeholder="Enter your email">
                                    </div>

                                    <div class="mb-3">
                                        <!-- <a href="pages-recoverpw.html" class="text-muted float-end"><small>Forgot your password?</small></a> -->
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" name="super_pswd" class="form-control" placeholder="Enter your password">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 mb-0 text-center">
                                        <!-- <button class="btn btn-primary" type="submit"> Log In </button> -->
                                        <input type="submit" name="super_admin_sigin" class="btn btn-primary" value="Sign in">
                                    </div>
                                </form>
                                <?php
                                    if(isset($_POST['super_admin_sigin'])){
                                    $login='SELECT * FROM `super_admin` WHERE  Email="'.$_POST['super_email'].'" ';
                                        $query=mysqli_query($db,$login);
                                        if(mysqli_num_rows($query)>0){
                                            //login function 
                                            $row=mysqli_fetch_array($query);
                                            if($row['Password']==$_POST["super_pswd"]){
                                                    $_SESSION['super_admin_id']=$row['Super_admin_id '];
                                                    $_SESSION['super_email']=$row['Email'];
                                                    $_SESSION['super_name']=$row['Name'];
                                                    $_SESSION['super_phone']=$row['Phone'];
                                                    $_SESSION['super_profile']=$row['Profile_image'];
                                                
                                                    echo '<div class="alert alert-success mt-3">Login Success, Redirecting...</div>';
                                                    echo '<meta http-equiv="refresh" content="0;URL=dashboard.php">';
                                            }else {
                                                echo '<div class="alert alert-danger mt-3">Password Wrong! Try Again.</div>';
                                            }
                                            
                                        }else {
                                            echo '<div class="alert alert-danger mt-3" id="register_en">User Does Not Exists.</div>';
                                        }
                                    }
                                ?>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            2018 - <script>document.write(new Date().getFullYear())</script> © Hyper - CompanyName.com
        </footer>
        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>
        
        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/hyper_2/modern/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Oct 2022 04:55:34 GMT -->
</html>
