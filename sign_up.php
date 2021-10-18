<?php include('config.php'); ?>

<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Clever - Education &amp; Courses Template | Home</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
<div id="preloader">
        <div class="spinner"></div>
    </div>
<header class="header-area">
<div class="top-header-area d-flex justify-content-between align-items-center">
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

        <!-- Navbar Area -->
        <div class="clever-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cleverNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.php"><img src="img/core-img/logo.png" alt=""></a>

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
                                <li><a href="index.php">Beranda</a></li>
                                <li><a href="index.php">Mata Pelajaran</a></li>
                                <li><a href="index.php">Kontak</a></li>
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
                                <a href="sign_up.php" class="btn active">Daftar</a>
                                <a href="index.php" class="btn">Masuk</a>
                            </div>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <section id="main-content">
    <div class="container">
        
        <hr>
        
        <div id="new-account">
            <h1>Buat Akun Baru</h1>
            <form action="sign_up.php?act=sign_up" method="post">


            <?php
    if(isset($_GET['act']) AND $_GET['act']=='sign_up') {
        if($_POST['password'] == $_POST['password_confirmation']){
            $tambah = mysqli_query($connect,"INSERT INTO member (nama_depan, nama_belakang, alamat, email, username, password, telepon, kelas, level)
                                    VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[address]', '$_POST[email]',
                                    '$_POST[username]','$_POST[password]', '$_POST[telephone]', '$_POST[kelas]', '$_POST[level]')");
            
            if($tambah) {
                echo "<script src='sweetalert/sweetalert.min.js'></script>
					<script language='JavaScript'>
					swal({
					  title: 'SELAMAT!',
					  text: 'Kamu berhasil mendaftar!',
					  icon: 'success',
					  button : false
					});</script>";
					echo "<meta http-equiv='refresh' content='1;url=index.php'>";
				echo "<button> <a href='index.php' /> </button> ";
            } else {
                echo "<h4>Data gagal disimpan.</h4>";
            }
        } else {
            echo "<h4>Password harus sama!</h4>";
        }
    }
?>
                <p>
                    <label for="firstname">
                        <span class="required-field">*</span> NAMA DEPAN:
                    </label>
                    <input type="text" id="firstname" name="firstname" required>
                </p>
                <p>
                    <label for="lastname">
                        <span class="required-field">*</span> NAMA BELAKANG:
                    </label>
                    <input type="text" id="lastname" name="lastname" required>
                </p>
                <p>
                    <label for="lastname">
                        <span class="required-field">*</span> ALAMAT:
                    </label>
                    <input type="text" id="address" name="address" required>
                </p>
                <p>
                    <label for="email">
                        <span class="required-field">*</span> EMAIL:
                    </label>
                    <input type="email" id="email" name="email" required>
                </p>
                <p>
                    <label for="username">
                        <span class="required-field">*</span> USERNAME:
                    </label>
                    <input type="username" id="username" name="username" required>
                </p>
                <p>
                    <label for="password">
                        <span class="required-field">*</span> PASSWORD:
                    </label>
                    <input type="password" id="password" name="password" required>
                </p>
                <p>
                    <label for="password_confirmation">
                        <span class="required-field">*</span> KONFIRMASI PASSWORD:
                    </label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required>
                </p>
                <p>
                    <label for="telephone">
                        <span class="required-field">*</span> TELEPON:
                    </label>
                    <input type="text" id="telephone" name="telephone" required>
                </p>
				<p>
					<label for="kelas"> 
					</label>
						<span class="required-field">*</span> KELAS:
									<select name="kelas" class="form-control" id="kelas" required>
										<option value="10 TKJ">10 TKJ</option>
										<option value="11 TKJ">11 TKJ</option>
										<option value="12 TKJ">12 TKJ</option>
										<option value="10 RPL">10 RPL</option>
										<option value="11 RPL">11 RPL</option>
										<option value="12 RPL">12 RPL</option>
										
									</select>
					
				</p>
                <p>
                    <label for="level">
                        <span class="required-field">*</span> LEVEL
                    </label>
                    
					<select type="level" class="form-control" id="level" name="level" required>
										<option value="Murid">Murid</option>
										
									</select>
                </p>
                <p><span class="required-field">*</span> wajib diisi.</p>

                <hr>

                <input type="submit" value="BUAT AKUN" class="secondary-cart-btn">
                <button type="reset" class="secondary-cart-btn">RESET</button>

    
            </form>
    
    
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