<?php
  session_start();
  error_reporting(0);
  include ('connection.php');
  if (empty($_SESSION['admin_id'])) {
     header("Location: home3.php");
 }
$roles =  $_SESSION['admin_role'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>FPO Profile</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <style>
        .section-title h2::after {
            left: 0px;
        }

        .section-title {
            text-align: left;
        }

        .profile-status {
            position: absolute;
            right: 0px;
            left: 60%;
            top: 50%;
            margin-top: -50px;
        }

        .profile-status p {
            font-size: 12px;
            margin-bottom: 5px;
        }

        .progress-bar {
            background-color: #8bc34a;
        }

        .relative {
            position: relative;
        }
    </style>
</head>

<body style="background-image: url('images/fpo-bg2.jpg');background-repeat: repeat-y;background-position: center;">
    <section id="topbar" class="d-flex align-items-center" style="max-width: none;margin: 0px auto;border-radius: 0px;">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:contact@example.com">contact@example.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+91-9898989898</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section>
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="index.php"><img src="https://www.krishigap.com/img/krishi-gap-logo.png"></a>
            </div>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="user.php">Home</a></li>
                    <!-- <li><a href="assign.php">Assign</a></li>
            <li><a href="generated_code.php">Generate Code</a></li> -->
                    <!-- <li><a href="#" class="btn-get-started animate__animated animate__fadeInUp logout-btn" data-bs-toggle="modal" data-bs-target="#myModal">Generate Code</a></li> -->
                    <!-- <li><a href="#">Profile Summary</a></li>
            <li><a href="#">Food Safety Standard</a></li> -->
                    <li><a href="user_logout.php"
                            class="btn-get-started animate__animated animate__fadeInUp logout-btn">Logout</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>

    <main id="main">
        <section id="hero">
            <div class="hero-container">
                <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade"
                    data-bs-ride="carousel">
                    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active" style="background: url(assets/img/slide/slider5.jpg)">
                            <div class="carousel-container">
                                <div class="carousel-content">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="background:url(assets/img/slide/slider2.jpg)">
                            <div class="carousel-container">
                                <div class="carousel-content">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="background:url(assets/img/slide/slide-1.jpg)">
                            <div class="carousel-container">
                                <div class="carousel-content">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="background:url(assets/img/slide/slide4.jpg)">
                            <div class="carousel-container">
                                <div class="carousel-content">
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
        </section>
        <div class="container mt-5 mb-5">
            <div class="section-title">
                <h2>Client Users List</h2>
            </div>
            <div class="table-1">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Organization Name</th>
                            <th>Address</th>
                            <th>State</th>
                            <th>Email ID</th>
                            <th>Contact No.</th>
                            <th>Feedback</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Kashimnagar Farmer Producer Compamny Ltd - (HR9752)</td>
                            <td>H. No: 1-50/3 Anjanagiri, Village, </td>
                            <td>Telangana</td>
                            <td>KFPCL@gmail.com</td>
                            <td>9876543210</td>
                            <td>NA</td>
                            <td class='col-md-2'>
                                <div class="row">
                                    <div class="col-md-6"><a href="qci_view_fpo.php?id=19" class='btn btn-success' target="_blank">View</a></div>
                                    <?php if($roles == 'Director') {} else { ?>
                                    <div class="col-md-6"><a href="#" class='btn btn-primary' target="_blank">Edit</a></div>
                                    <?php } ?>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Link-1</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Link-2</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Link-3</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Link-4</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Link-5</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            XYZ <br>
                            New Delhi, 110055<br>
                            India <br><br>
                            <strong>Phone:</strong> +91-9898989898<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 footer-info">
                        <h3>About</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and
                            scrambled it to make a type specimen book. It has survived not only five centuries, but
                            also the leap into
                            electronic typesetting, remaining essentially unchanged.
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                Copyright 2022. All rights reserved.
            </div>
            <div class="credits">
                Design & Developed by <a href="https://aretesoftwares.com/">Aretesoftwares.com</a>
            </div>
        </div>
    </footer>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>