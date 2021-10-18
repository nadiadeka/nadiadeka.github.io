<!DOCTYPE html>
<html lang="en">
<?php 
include('config.php');
session_start();

?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>SIMBIOSIS - Sistem Pembelajaran Online Siswa-</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
    
        <!-- Top Header Area -->
        <div class="top-header-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="#"><span>Phone:</span> 085646586801 </a>
                <a href="#"><span>Email:</span> Simbiosis@gmail.com</a>
            </div>
            <!-- Follow Us -->
            <div class="follow-us">
                <span>Follow us</span>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="clever-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cleverNav">

                    <!-- Logo -->
                    <a class="nav-brand" ><img src="img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="index-login.php">Home</a></li>
                                
                                <li><a href="index-login.php">Courses</a></li>
                                <li><a href="index-login.php">Instructors</a></li>
                                <li><a href="index-login.php">Blog</a></li>
                                <li><a href="index-login.php">Contact</a></li>
                            </ul>

                            <!-- Search Button -->
                            <div class="search-area">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                         <!-- Register / Login -->
                            <div class="register-login-area">
                                <a href="sign_up.php" class="btn">Register</a>
                                <a href="index-login.php" class="btn">Login</a>
                            </div>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area bg-img bg-overlay-2by5 single-course-intro d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/bg1.jpg);">
		<div class="hero-content text-center">
	   <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Hero Content -->
                    
                  <div class="single-course-intro-content text-center">       
					 <a color="white">  <h3>SIMBIOSIS</h3> </a>
						<div class="meta d-flex align-items-center justify-content-center">
							<a href="#">Support with Adaptive learning system</a>
						</div>
                        <a href="index-login.php" class="btn clever-btn" >LOGIN</a>
                    </div>
                </div>
				  </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

		<section class="register-now section-padding-100-0 d-flex justify-content-between align-items-center" style="background-image: url(img/core-img/texture.png);">
			<!-- Register Contact Form -->
			<div class="register-contact-form mb-100 wow fadeInUp" data-wow-delay="250ms">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="forms">
								<h4>Ayo! Pelajari tips dan trik cara belajar sesuai dengan gaya belajarmu.</h4>
								<form action="#" method="post">
									<div class="row">
										
										<div class="col-12">
											<a href="index-login.php" > <button class="btn clever-btn w-100"> Klik di Sini! </button> </a>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Register Now Countdown -->
			<div class="register-now-countdown mb-100 wow fadeInUp" data-wow-delay="500ms">
				<h3>Sudah tahu gaya belajarmu?</h3>
				<p>Sebenarnya ada berapa gaya belajar? kira-kira apa ya gaya belajarku? apakah aku sudah belajar dengan optimal? apa saja yang harus aku lakukan untuk bisa lebih memahami materi yang diberikan guru ya?</p>
				<!-- Register Countdown -->
				
			</div>
    </section>
    <!-- ##### Popular Courses Start ##### -->
    <section class="popular-courses-area section-padding-100-0" style="background-image: url(img/core-img/texture.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Mata Pelajaran</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <img src="img/bg-img/komputerdanjaringandasar.jpg" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>Komputer dan Jaringan Dasar</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">M. Arif</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Informatika</a>
                            </div>
                            <p>Pada mata pelajaran ini kita akan belajar mengenai komputer dan jaringan dasar. Mulai dari perakitan komputer hingga perancangan jaringan komputer.</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 10
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                </div>
                            </div>
                            <div class="course-fee h-100">
                                <a href="index-login.php" class="free">MULAI</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="img/bg-img/komputerdanjaringandasar.jpg" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>Sistem Komputer</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Nindia Rada</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Informatika</a>
                            </div>
                            <p>Pada mata pelajaran ini siswa akan dibekali materi yang lebih mendalam mengenai konsep dasar dari sistem komputer dari sisi perangkat kerasnya. </p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 10
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                </div>
                            </div>
                            <div class="course-fee h-100">
                                <a href="index-login.php" class="free">Mulai</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="750ms">
                        <img src="img/bg-img/komputerdanjaringandasar.jpg" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>Simulasi dan Komunikasi Digital</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Mr. Kusworo</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Informatika</a>
                            </div>
                            <p>Mata pelajaran Simulasi Digital adalah mata pelajaran yang membekali siswa agar dapat mengomunikasikan gagasan atau konsep melalui media digital.  </p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 10
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                </div>
                            </div>
                            <div class="course-fee h-100">
                                <a href="index-login.php" class="free">MULAI</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Popular Courses End ##### -->

    <!-- ##### JUrusan start ##### -->
    <section class="best-tutors-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>JURUSAN</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="tutors-slide owl-carousel wow fadeInUp" data-wow-delay="250ms">

                        <!-- Single Tutors Slide -->
                        <div class="single-tutors-slides">
                            <!-- Tutor Thumbnail -->
                            <div class="tutor-thumbnail">
                                <img src="img/bg-img/tkj.png" alt="">
                            </div>
                            <!-- Tutor Information -->
                            <div class="tutor-information text-center">
                                <h5>TEKNIK KOMPUTER JARINGAN</h5>
                                <span>TKJ</span>
                                
                                <div class="social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Tutors Slide -->
                        <div class="single-tutors-slides">
                            <!-- Tutor Thumbnail -->
                            <div class="tutor-thumbnail">
                                <img src="img/bg-img/rpl.png" alt="">
                            </div>
                            <!-- Tutor Information -->
                            <div class="tutor-information text-center">
                                <h5>REKAYASA PERANGKAT LUNAK</h5>
                                <span>RPL</span>
                                
                                <div class="social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Tutors Slide -->
                        <div class="single-tutors-slides">
                            <!-- Tutor Thumbnail -->
                            <div class="tutor-thumbnail">
                                <img src="img/bg-img/mtr.png" alt="">
                            </div>
                            <!-- Tutor Information -->
                            <div class="tutor-information text-center">
                                <h5>MEKANIK DAN ELEKTRONIKA</h5>
                                <span>MTR</span>
                               
                                <div class="social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Tutors Slide -->
                        <div class="single-tutors-slides">
                            <!-- Tutor Thumbnail -->
                            <div class="tutor-thumbnail">
                                <img src="img/bg-img/elin.png" alt="">
                            </div>
                            <!-- Tutor Information -->
                            <div class="tutor-information text-center">
                                <h5>ELEKTRONIKA INDUSTRI</h5>
                                <span>ELIN</span>
                                
                                <div class="social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### jurusan End ##### -->


    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Top Footer Area -->
        <div class="top-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="index.html"><h3> <font color="white"> SIMBIOSIS </font>  </h3 ></a> 
								<h7> <font color="white"> Simbiosis merupakan web pembelajaran online untuk siswa yang menerapkan ADAPTIVE LEARNING SYSTEM yang dapat menyesuaikan sumber belajar siswa berdasarkan gaya belajarnya. </font>  </h7>
						</div>
                        <!-- Copywrite -->
                         <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-heart-o" aria-hidden="true"></i> <a href="#" target="_blank"> </a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="#"><span>Phone:</span> 085646586801</a>
                <a href="#"><span>Email:</span> simbiosis@gmail.com</a>
            </div>
            <!-- Follow Us -->
            <div class="follow-us">
                <span>Follow us</span>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>