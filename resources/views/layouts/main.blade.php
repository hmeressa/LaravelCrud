<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Doccure</title>
    <link type="image/x-icon" href="../bootstrap/img/favicon.png" rel="icon">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../bootstrap/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../bootstrap/css/style.css">
    <link rel="stylesheet" href="../bootstrap/css/datatables.min.css">
    {{-- <script src="../bootstrap/datatables/jquery.dataTables.min.js"></script>
    <script src="../bootstrap/datatables/datatables.min.js"></script> --}}
</head>
<body>
    <div class="main-wrapper">
        <header class="header">
            <nav class="navbar navbar-expand-lg header-nav">
                <div class="navbar-header">
                    <a id="mobile_btn" href="javascript:void(0);">
                        <span class="bar-icon">
						<span></span>
                        <span></span>
                        <span></span>
                        </span>
                    </a>
                    <span class="navbar-brand logo">
                        <img src="../bootstrap/img/logo.png" class="img-fluid" alt="Logo">
                    </span>
                </div>
                <div class="main-menu-wrapper">
                    <div class="menu-header">
                        <a href="index-2.html" class="menu-logo">
                            <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
                        </a>
                        <a id="menu_close" class="menu-close" href="javascript:void(0);">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <ul class="main-nav">
                        <li class="">
                            <a href="{{ url('/')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{ url('/register')}}">Register</a>
                        </li>
                        <li>
                            <a href="{{ url('/view')}}">View User</a>
                        </li>
                        {{-- <li>
                            <a href="{{ url('/update')}}">Update User </a>
                        </li> --}}
                    </ul>
                </div>
                <ul class="nav header-navbar-rht ">
                    <li class="nav-item">
                        <a class="nav-link header-login" href="{{ url('/login')}}">login / Signup </a>
                    </li>
                </ul>
            </nav>
        </header>
        @yield('content')


        <footer class="footer">
            <!-- Footer Top -->
            <div class="footer-top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">

                            <!-- Footer Widget -->
                            <div class="footer-widget footer-about">
                                <div class="footer-logo">
                                    <img src="assets/img/footer-logo.png" alt="logo">
                                </div>
                                <div class="footer-about-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <div class="social-icon">
                                        <ul>
                                            <li>
                                                <a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /Footer Widget -->

                        </div>

                        <div class="col-lg-3 col-md-6">

                            <!-- Footer Widget -->
                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title">For Patients</h2>
                                <ul>
                                    <li><a href="search.html"><i class="fas fa-angle-double-right"></i> Search for Doctors</a></li>
                                    <li><a href="login.html"><i class="fas fa-angle-double-right"></i> Login</a></li>
                                    <li><a href="register.html"><i class="fas fa-angle-double-right"></i> Register</a></li>
                                    <li><a href="booking.html"><i class="fas fa-angle-double-right"></i> Booking</a></li>
                                    <li><a href="patient-dashboard.html"><i class="fas fa-angle-double-right"></i> Patient Dashboard</a></li>
                                </ul>
                            </div>
                            <!-- /Footer Widget -->

                        </div>

                        <div class="col-lg-3 col-md-6">

                            <!-- Footer Widget -->
                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title">For Doctors</h2>
                                <ul>
                                    <li><a href="appointments.html"><i class="fas fa-angle-double-right"></i> Appointments</a></li>
                                    <li><a href="chat.html"><i class="fas fa-angle-double-right"></i> Chat</a></li>
                                    <li><a href="login.html"><i class="fas fa-angle-double-right"></i> Login</a></li>
                                    <li><a href="doctor-register.html"><i class="fas fa-angle-double-right"></i> Register</a></li>
                                    <li><a href="doctor-dashboard.html"><i class="fas fa-angle-double-right"></i> Doctor Dashboard</a></li>
                                </ul>
                            </div>
                            <!-- /Footer Widget -->

                        </div>

                        <div class="col-lg-3 col-md-6">

                            <!-- Footer Widget -->
                            <div class="footer-widget footer-contact">
                                <h2 class="footer-title">Contact Us</h2>
                                <div class="footer-contact-info">
                                    <div class="footer-address">
                                        <span><i class="fas fa-map-marker-alt"></i></span>
                                        <p> 3556 Beech Street, San Francisco,<br> California, CA 94108 </p>
                                    </div>
                                    <p>
                                        <i class="fas fa-phone-alt"></i> +1 315 369 5943
                                    </p>
                                    <p class="mb-0">
                                        <i class="fas fa-envelope"></i> doccure@example.com
                                    </p>
                                </div>
                            </div>
                            <!-- /Footer Widget -->

                        </div>

                    </div>
                </div>
            </div>
            <!-- /Footer Top -->

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container-fluid">

                    <!-- Copyright -->
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="copyright-text">
                                    <p class="mb-0"><a href="templateshub.net">Templates Hub</a></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">

                                <!-- Copyright Menu -->
                                <div class="copyright-menu">
                                    <ul class="policy-menu">
                                        <li><a href="term-condition.html">Terms and Conditions</a></li>
                                        <li><a href="privacy-policy.html">Policy</a></li>
                                    </ul>
                                </div>
                                <!-- /Copyright Menu -->

                            </div>
                        </div>
                    </div>
                    <!-- /Copyright -->

                </div>
            </div>
            <!-- /Footer Bottom -->

        </footer>
        <!-- /Footer -->

    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Slick JS -->
    <script src="assets/js/slick.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>

</body>


</html>

</html>
